<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/products",[productcontroller::class,'index']);
Route::get("/products/{id}",[productcontroller::class,'show']) ->name('products.show');

Route::post("razorpay/callback",[productcontroller::class,'callback'])->name('razorpay.callback');