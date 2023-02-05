<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function display_order(){
        $orders = Order::where("account_id","LIKE", Auth::user()->id)->get();
        return view('order', compact("orders"));
    }
}
