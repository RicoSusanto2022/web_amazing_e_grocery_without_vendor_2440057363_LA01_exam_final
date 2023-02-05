<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    public function login_auth(Request $user_input){
        $res = [
            "email" => $user_input->email,
            "password" => $user_input->password
        ];


        if(Auth::attempt($res) == true){
            FacadesSession::put("User Session Recorded", Auth::user()->name);
            return redirect()->route('display_home');
        }else {
            return redirect()->route("display_login_form")->withErrors(["message_error" => "Wrong Email/Password. Please Check Again"]);
        }
    }

    public function logout() {
        Auth::logout();
        return view('logout');
    }
}
