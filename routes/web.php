<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\is_admin;
use App\Http\Middleware\is_logged;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('locale/{lang}',
function ($lang){
    Session::put("locale", $lang);
    return redirect()->back();
})->name("localization");

Route::get('/', function () {
    return view('index');
})->name('index_page');

//all user can acess
Route::get('/login_form', [PageController::class, 'login_form'])->name('display_login_form');
Route::get('/regist_form', [PageController::class, 'regist_form'])->name('display_regist_form');
Route::post('/regist_db', [AccountController::class, 'register'])->name('regist_to_db');
Route::post('/login_db', [AuthController::class, 'login_auth'])->name('login_to_db');

//routing & middleware user
Route::get('/home', [ItemController::class, 'display_home_page'])->name("display_home")->middleware([is_logged::class]);
Route::get('/detail/{item_id}', [ItemController::class, 'display_detail_item'])->name('display_detail')->middleware([is_logged::class]);
Route::get('/back', [PageController::class, 'back_home_page'])->name('back')->middleware([is_logged::class]);

Route::get('/logout', [AuthController::class, 'logout'])->name('out')->middleware([is_logged::class]);

Route::get('/profile', [PageController::class, 'profile_page'])->name("display_profile")->middleware([is_logged::class]);
Route::patch('/update/profile', [AccountController::class, 'update_profile'])->name("update")->middleware([is_logged::class]);
Route::get('/update/profile/success', [PageController::class, 'success_update_profile'])->name("success_profile")->middleware([is_logged::class]);

Route::get('/cart', [CartController::class, 'display_Cart'])->name("show_cart")->middleware([is_logged::class]);
Route::post('/add/cart', [ItemController::class, 'add_to_cart'])->name("add_item")->middleware([is_logged::class]);
Route::delete('/delete/cart/{cart_id}', [CartController::class, "remove_cart"])->name("remove_from_cart")->middleware([is_logged::class]);

Route::get('/order', [OrderController::class, 'display_order'])->name("order")->middleware([is_logged::class]);
Route::get('/add/order', [CartController::class, "add_order"])->name("order_added")->middleware([is_logged::class]);
Route::get("/add/order/success", [PageController::class, 'success_order_created'])->name("s_order_message")->middleware([is_logged::class]);

Route::get("/account/maintenance", [AccountController::class, "display_acc"])->name("manage_acc")->middleware([is_logged::class, is_admin::class]);
Route::delete("/del/acc/{id}", [AccountController::class, 'remove_acc'])->name("delete_acc")->middleware([is_logged::class, is_admin::class]);
Route::get("/update/acc/{id}", [PageController::class, "display_detail_acc"])->name("acc_update")->middleware([is_logged::class, is_admin::class]);

Route::patch("/update/acc/role", [AccountController::class, "update_role"])->name("role_updated")->middleware([is_logged::class, is_admin::class]);
Route::get("/logout/view", [PageController::class, "back_index"])->name("back_idx")->middleware([is_logged::class]);