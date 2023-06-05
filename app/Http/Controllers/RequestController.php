<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FriendRequest;
use App\Models\Friend;
use Illuminate\Support\Facades\Auth;
use DB;

class RequestController extends Controller
{
    public function request_sent(Request $request){

        $user = Auth::user();
        $sender_id = DB::table('suggetions')->where('id',  $request->id)->first();
        $check = FriendRequest::where('user_id', $user->id)->where('receiver_id', $sender_id->relation_id)->first();
        if($check){
            if($check->status == 0){
                $status = 1;
            }else{
                $status = 0;
            }
            FriendRequest::where('user_id', $user->id)->where('receiver_id', $sender_id->relation_id)->update(array('status' => $status));

        }else{
            FriendRequest::create(['user_id'=> $user->id, 'receiver_id'=> $sender_id->relation_id, 'status'=> 0]);
            $status = 0;
        }


        return $status;

    }

    public function approve_request(Request $request){

        $data = FriendRequest::where('id', $request->id)->first();

        Friend::create(array(
            'user_id' => $data->user_id,
            'friend_id' => $data->receiver_id,
        ));
        Friend::create(array(
            'user_id' => $data->receiver_id,
            'friend_id' => $data->user_id,
        ));

        DB::table('suggetions')->where('user_id', $data->user_id)->where('relation_id', $data->receiver_id)->delete();
        DB::table('suggetions')->where('user_id', $data->receiver_id)->where('relation_id', $data->user_id)->delete();
        FriendRequest::where('id', $request->id)->delete();
        return true;

    }

    public function delete_request(Request $request){

        FriendRequest::where('id', $request->id)->delete();
        return true;

    }
}
