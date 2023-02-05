<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AccountController extends Controller
{
    public function register(Request $data){
        $data->validate([
            "first_name"=> "required|max:25",
            "last_name" => "required|max:25",
            "email" => "required|email|unique:users,email",
            "role" => "required",
            "gender" => "required",
            "picture" => "required|mimes:jpg,jpeg,tiff,bmp,png",
            "password" => ["required", Password::min(8)->numbers()],
            "confirm_password" => "required|min:8|same:password"
        ]);

        $pict = $data->file("picture");
        $owner_name = $pict->getClientOriginalName();
        $pict_extension = $pict->getClientOriginalExtension();
        $path = $owner_name.time().'.'.$pict_extension;
        $pict->storeAs("public/display_picture",$path);

        $new_account = new User();
        $new_account->role_id = $data->role;
        $new_account->gender_id = $data->gender;
        $new_account->first_name = $data->first_name;
        $new_account->last_name = $data->last_name;
        $new_account->email = $data->email;
        $new_account->display_picture_link = $path;
        $new_account->password = Hash::make($data->password);
        $new_account->save();

        return redirect()->route("display_login_form");
    }

    public function update_profile(Request $data){
        $data->validate([
            "first_name"=> "required|max:25",
            "last_name" => "required|max:25",
            "role" => "required",
            "gender" => "required",
            "password" => ["required", Password::min(8)->numbers()],
            "confirm_password" => "required|min:8|same:password"
        ]);

        $input_email = null;
        $input_picture = null;

        if($data->email == Auth::user()->email){
            $input_email = Auth::user()->email;
        }else{
            $data->validate(["email" => "required|email|unique:users,email"]);
            $input_email = $data->email;
        }

        if($data->picture == null){
            $input_picture = Auth::user()->display_picture_link;
        }else {
            $data->validate(["picture" => "required|mimes:png,jpg,jpeg,tiff,bmp"]);
            $pict = $data->file("picture");
            $owner_name = $pict->getClientOriginalName();
            $pict_extension = $pict->getClientOriginalExtension();
            $path = $owner_name.time().'.'.$pict_extension;
            $pict->storeAs("public/display_picture",$path);
            $input_picture = $path;
        }

        $registed_account = new User();
        $registed_account->exists = true;
        $registed_account->id = Auth::user()->id;
        $registed_account->role_id = $data->role;
        $registed_account->gender_id = $data->gender;
        $registed_account->first_name = $data->first_name;
        $registed_account->last_name = $data->last_name;
        $registed_account->email = $input_email;
        $registed_account->display_picture_link = $input_picture;
        $registed_account->password = Hash::make($data->password);
        $registed_account->save();

        return redirect()->route("success_profile");
    }

    public function display_acc(){
        $accs = DB::table("users")->get();
        return view("account_maintenance", compact("accs"));
    }

    public function remove_acc(Request $del){
        DB::table("users")->where("id", "=", $del->id)->delete();
        return redirect()->back();
    }

    public function update_role(Request $update){
        User::where("id", "=", $update->acc_id)->update([
            "role_id" => $update->role
        ]);
        return redirect()->route("manage_acc");
    }
}
