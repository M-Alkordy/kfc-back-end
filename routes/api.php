<?php

use App\Http\Controllers\BranchesController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\SaladController;
use App\Http\Controllers\SauceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register',[\App\Http\Controllers\CustomerController::class,'register']);
Route::post('/login',[\App\Http\Controllers\CustomerController::class,'login']);

Route::resource('/branch', BranchesController::class);
Route::resource('/menuitem', MenuItemController::class);
Route::resource('/salad', SaladController::class);
Route::resource('/sauce', SauceController::class);
Route::resource('/drink', DrinkController::class);
