<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('login');
});


Route::resources([
    'products' => ProductController::class,
]);
Route::post("/singup", [LoginController::class, "singup"])->name("singup");
Route::post("/singin", [LoginController::class, "singin"])->name("singin");
Route::get("dashboard", [LoginController::class, "dashboard"])->name("dashboard");
