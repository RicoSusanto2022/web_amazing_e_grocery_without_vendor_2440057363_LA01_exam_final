<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function display_home_page() {
        $item = DB::table("items")->paginate(10);
        return view("home", compact("item"));
    }

    public function display_detail_item(Request $data) {
        $item = DB::table('items')->where("item_id", "=", $data->item_id)->get();
        return view("detail", compact("item"));
    }

    public function add_to_cart(Request $data){
        DB::table("carts")->insert(
            ["account_id" => Auth::user()->id,
            "item_id" => $data->item_id,
            "price" => $data->price
            ]
        );
        return redirect()->route("show_cart");
    }
}
