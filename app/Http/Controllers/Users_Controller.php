<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users_Controller extends Controller
{
    public function getUsersData(){
        $users = DB::select('SELECT * FROM users AS u
        INNER JOIN admin AS a ON a.id = u.id
        INNER JOIN user_profile AS up ON up.id = u.id

        ');

        return response()->json(["success" => true, "users" => $users],200);
    }
}
