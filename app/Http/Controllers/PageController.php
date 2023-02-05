<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function login_form(){
        return view('login');
    }

    public function regist_form(){
        return view('register');
    }

    public function back_home_page(){
        $item = DB::table("items")->paginate(10);
        return view("home", compact("item"));
    }

    public function profile_page(){
        return view('profile');
    }

    public function success_update_profile(){
        return view("s_update_profile");
    }
    public function success_order_created(){
        return view("s_add_order");
    }

    public function display_detail_acc(Request $data) {
        $acc = DB::table('users')->where("id", "=", $data->id)->get();
        return view("update_acc", compact("acc"));
    }

    public function back_index(){
        return view("index");
    }

}
