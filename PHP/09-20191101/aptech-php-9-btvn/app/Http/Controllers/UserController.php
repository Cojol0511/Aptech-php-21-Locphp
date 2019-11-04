<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function hienThiTatCa()
    {
        $users = DB::table('users')->get();
        return $users;
    }
    public function hienThiMotNguoi($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->get();
        return view('users', ['users' => $user]);
    }
    public function hienThiBang()
    {
        $user = DB::table('users')->get();
        return view('usersTable', ['users' => $user]);
    }
}
