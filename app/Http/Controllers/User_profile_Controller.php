<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User_profile_Controller extends Controller
{
    public function getUserProfileData(){
        $userprofile = DB::select('SELECT * FROM users AS u
        INNER JOIN user_profile AS up ON up.id = u.id

        ');

        return response()->json(["success" => true, "users" => $userprofile],200);
    }
}
