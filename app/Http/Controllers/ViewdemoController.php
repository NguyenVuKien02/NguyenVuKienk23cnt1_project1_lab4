<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ViewdemoController extends Controller
{
    public function view4()
    {
        return view('view4')
                ->with('name', 'Vũ Kiên')
                ->with('company', 'Devmaster Academy');;
    }
    public function view5()
    {
        // dữ liệu
        $info = "VIỆN CÔNG NGHỆ VÀ ĐÀO TẠO DEVMASTER";
        $emp = array(
            "Name"=>"Nguyen Vu Kien",
            "Email"=>"KienNguyen@gmail.com",
            "Phone"=>"097555555",
        );
        if(\Illuminate\Support\Facades\View::exists('view5')){
            return view('view5',["info" => $info,"emp" => $emp]);
        }else{
            return "Không tồn tại view5";
        }
    }

}
