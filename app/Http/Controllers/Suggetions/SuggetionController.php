<?php

namespace App\Http\Controllers\Suggetions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class SuggetionController extends Controller
{
    public function suggetions()
    {
        $user = Auth::user();
        $percentage = 0;
        $final_suggetions = [];
        $array=[];
        $brother_count = 1;
        $father_count = 1;
        $husband_count = 1;
        $mother_count = 1;
        $grand_father_count = 1;



        $family_datas = DB::table('family_members')
            ->where('user_id', $user->id)
            ->get();

        foreach ($family_datas as $data) {

            // Wife
            if ($data->relation == 'Wife') {
                $wifes = DB::table('users')
                    ->where('name', 'LIKE', '%' . $data->name . '%')
                    ->get();

                foreach ($wifes as $wife) {
                    if ($wife) {

                        $check = DB::table('family_members')
                            ->where('user_id', $wife->id)
                            ->where('relation', 'Husband')
                            ->first();

                        similar_text($user->name, $check->name, $percentage);
                        if ($percentage >= 70) {

                            $sug_check = DB::table('suggetions')->where('user_id', $user->id)->where('relation_id', $wife->id)->first();

                            if(!$sug_check){
                                DB::table('suggetions')->insert(array('user_id' => $user->id, 'relation_id' => $wife->id, 'match_percentage' => $percentage ,'name' =>$wife->name, 'relation' => 'Wife'));
                            }


                            $final_suggetions['wife'] =  $wife->name;
                            $final_suggetions['wife %'] = $percentage;

                        }
                    }

                }
            }
            // End Wife
            // Husband

            elseif ($data->relation == 'Husband') {

                $husbands = DB::table('users')
                    ->where('name', 'LIKE', '%' . $data->name . '%')
                    ->get();


                foreach ($husbands as $husband) {
                    if ($husband) {
                        $check = DB::table('family_members')
                            ->where('user_id', $husband->id)
                            ->where('relation', 'Wife')
                            ->get();
                        $count = $check->count();
                        if($count > 0){
                            foreach($check as $br){
                                similar_text($user->name, $br->name, $percentage);
                                if ($percentage >= 70) {
                                    $sug_check = DB::table('suggetions')->where('user_id', $user->id)->where('relation_id', $husband->id)->first();

                            if(!$sug_check){
                                DB::table('suggetions')->insert(array('user_id' => $user->id, 'relation_id' => $husband->id, 'match_percentage' => $percentage ,'name' =>$husband->name, 'relation' => 'Husband'));
                            }
                                    $final_suggetions['husband'.$husband_count] =  $husband->name;
                                    $final_suggetions['husband %'.$husband_count] = $percentage;
                                }
                            }

                        }
                    }
                }
                $husband_count++;
            }
            // End Husband


            // Brothers
            elseif ($data->relation == 'Brother') {

                $brothers = DB::table('users')
                    ->where('name', 'LIKE', '%' . $data->name . '%')
                    ->get();
                $array[] = $brothers;

                foreach ($brothers as $brother) {
                    if ($brother) {
                        $check = DB::table('family_members')
                            ->where('user_id', $brother->id)
                            ->where('relation', 'Brother')
                            ->get();
                        $count = $check->count();
                        if($count > 0){
                            foreach($check as $br){
                                similar_text($user->name, $br->name, $percentage);
                                if ($percentage >= 70) {
                                    $sug_check = DB::table('suggetions')->where('user_id', $user->id)->where('relation_id', $brother->id)->first();

                                    if(!$sug_check){
                                        DB::table('suggetions')->insert(array('user_id' => $user->id, 'relation_id' => $brother->id, 'match_percentage' => $percentage ,'name' =>$brother->name, 'relation' => 'Brother'));
                                    }
                                    $final_suggetions['brother'.$brother_count] =  $brother->name;
                                    $final_suggetions['brother %'.$brother_count] = $percentage;
                                }
                            }

                        }
                    }
                }
                $brother_count++;
            }
            // End Brothers
            // Father
            elseif ($data->relation == 'Father') {

                $fathers = DB::table('users')
                    ->where('name', 'LIKE', '%' . $data->name . '%')
                    ->get();


                foreach ($fathers as $father) {
                    if ($father) {
                        $check = DB::table('family_members')
                            ->where('user_id', $father->id)
                            ->where('relation', 'Child')
                            ->get();
                        $count = $check->count();
                        if($count > 0){
                            foreach($check as $br){
                                similar_text($user->name, $br->name, $percentage);
                                if ($percentage >= 70) {
                                    $sug_check = DB::table('suggetions')->where('user_id', $user->id)->where('relation_id', $father->id)->first();

                                    if(!$sug_check){
                                        DB::table('suggetions')->insert(array('user_id' => $user->id, 'relation_id' => $father->id, 'match_percentage' => $percentage ,'name' =>$father->name, 'relation' => 'Father'));
                                    }
                                    $final_suggetions['father'.$father_count] =  $father->name;
                                    $final_suggetions['father %'.$father_count] = $percentage;
                                }
                            }

                        }
                    }
                }
                $father_count++;
            }
            // End Fathers
            // Mothers

            elseif ($data->relation == 'Mother') {

                $mothers = DB::table('users')
                    ->where('name', 'LIKE', '%' . $data->name . '%')
                    ->get();


                foreach ($mothers as $mother) {
                    if ($mother) {
                        $check = DB::table('family_members')
                            ->where('user_id', $mother->id)
                            ->where('relation', 'Child')
                            ->get();
                        $count = $check->count();
                        if($count > 0){
                            foreach($check as $br){
                                similar_text($user->name, $br->name, $percentage);
                                if ($percentage >= 70) {
                                    $sug_check = DB::table('suggetions')->where('user_id', $user->id)->where('relation_id', $mother->id)->first();

                                    if(!$sug_check){
                                        DB::table('suggetions')->insert(array('user_id' => $user->id, 'relation_id' => $mother->id, 'match_percentage' => $percentage ,'name' =>$mother->name, 'relation' => 'Mother'));
                                    }
                                    $final_suggetions['mother'.$mother_count] =  $mother->name;
                                    $final_suggetions['mother %'.$mother_count] = $percentage;
                                }
                            }

                        }
                    }
                }
                $mother_count++;
            }

            // End Mothers
            // Grand Father
            elseif ($data->relation == 'Grand_Father') {

                $grand_fathers = DB::table('users')
                    ->where('name', 'LIKE', '%' . $data->name . '%')
                    ->get();


                foreach ($grand_fathers as $grand_father) {
                    if ($grand_father) {
                        $father = DB::table('family_members')->where('relation', 'Father')->where('user_id', $data->user_id)->first();
                        $check = DB::table('family_members')
                            ->where('user_id', $grand_father->id)
                            ->where('relation', 'Child')
                            ->get();
                        $count = $check->count();
                        if($count > 0){
                            foreach($check as $br){
                                similar_text($father->name, $br->name, $percentage);
                                if ($percentage >= 70) {
                                    $sug_check = DB::table('suggetions')->where('user_id', $user->id)->where('relation_id', $grand_father->id)->first();

                                    if(!$sug_check){
                                        DB::table('suggetions')->insert(array('user_id' => $user->id, 'relation_id' => $grand_father->id, 'match_percentage' => $percentage ,'name' =>$grand_father->name, 'relation' => 'Grand_Father'));
                                    }
                                    $final_suggetions['grand Father'.$grand_father_count] =  $grand_father->name;
                                    $final_suggetions['grand Father %'.$grand_father_count] = $percentage;
                                }
                            }

                        }
                    }
                }
                $grand_father_count++;
            }

            // End Grand Father
            // Grand Mother

            elseif ($data->relation == 'Grand_Mother') {

                $grand_mothers = DB::table('users')
                    ->where('name', 'LIKE', '%' . $data->name . '%')
                    ->get();


                foreach ($grand_mothers as $grand_mother) {
                    if ($grand_mother) {
                        $father = DB::table('family_members')->where('relation', 'Father')->where('user_id', $data->user_id)->first();
                        $check = DB::table('family_members')
                            ->where('user_id', $grand_mother->id)
                            ->where('relation', 'Child')
                            ->get();
                        $count = $check->count();
                        if($count > 0){
                            foreach($check as $br){
                                similar_text($father->name, $br->name, $percentage);
                                if ($percentage >= 70) {
                                    $sug_check = DB::table('suggetions')->where('user_id', $user->id)->where('relation_id', $grand_mother->id)->first();

                                    if(!$sug_check){
                                        DB::table('suggetions')->insert(array('user_id' => $user->id, 'relation_id' => $grand_mother->id, 'match_percentage' => $percentage ,'name' =>$grand_mother->name, 'relation' => 'Grand_Mother'));
                                    }
                                    $final_suggetions['grand Father'.$grand_father_count] =  $grand_father->name;
                                    $final_suggetions['grand Father %'.$grand_father_count] = $percentage;
                                }
                            }

                        }
                    }
                }
                $grand_father_count++;
            }

            // End Grand Mother


        }

        dd($final_suggetions);
    }
}
