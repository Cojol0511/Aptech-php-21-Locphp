<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function php01() {
        return view('Aptech-PHP-19-PhungHoangPhuLoc/PHP/01-20191011/index');
    }
    public function php02() {
        return view('Aptech-PHP-19-PhungHoangPhuLoc/PHP/02-20191014/btvn/index');
    }
    public function php03() {
        return view('Aptech-PHP-19-PhungHoangPhuLoc/PHP/03-20191016/btvn/mysql');
    }
    public function php04() {
        return view('Aptech-PHP-19-PhungHoangPhuLoc/PHP/04-20191018/login_0');
    }
    public function php05() {
        return view('Aptech-PHP-19-PhungHoangPhuLoc/PHP/05-20191021/form_dangKy');
    }
    public function php06() {
        return view('Aptech-PHP-19-PhungHoangPhuLoc/PHP/06-20191023/btvn/class');
    }

    public function hienthibaiviet($id){
        return view('test-nhe-hien-thi', ['number' => $id]);
    }
}