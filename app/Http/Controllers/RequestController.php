<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function request_sent(Request $request){



        return $request->id;

    }
}
