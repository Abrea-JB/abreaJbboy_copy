<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Controller extends Controller
{
    public function getAdminData(){
        $admin = DB::select('SELECT * FROM users AS u
        INNER JOIN admin AS a ON a.id = u.id

        ');

        return response()->json(["success" => true, "users" => $admin],200);
    }
}
