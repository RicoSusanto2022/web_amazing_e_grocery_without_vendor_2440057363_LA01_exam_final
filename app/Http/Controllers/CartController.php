<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function display_cart(){
        $carts = Cart::where("account_id","LIKE", Auth::user()->id)->get();
        return view('cart', compact("carts"));
    }

    public function remove_cart(Request $data){
        DB::table("carts")->where("cart_id", "=", $data->cart_id)->delete();
        return redirect()->back();
    }

    public function add_order(){
        $cart = DB::table("carts")->where("account_id", "=", Auth::user()->id)->get();
        foreach($cart as $data){
            DB::table("orders")->insert([
                "account_id" => $data->account_id,
                "item_id" => $data->item_id,
                "price" => $data->price
            ]);
        }
        DB::table("carts")->where("account_id", "=", Auth::user()->id)->delete();
        return redirect()->route("s_order_message");
    }
}
