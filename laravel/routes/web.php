<?php

/*npm install -g http-server
* http-server ./
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


use App\BaseController\HomeController;

Route :: get('/login',function() {
    return view('Login');
});

Route :: get('/logout',function() {

    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::post("/register",[UserController::class,'register']);
Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);



