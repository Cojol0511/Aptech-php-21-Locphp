<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function hienThiUser(){
        $users = DB::table('users')->get();
        return $users[id][1];
    }
}
