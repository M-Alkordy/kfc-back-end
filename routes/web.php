<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\BranchesController;

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
    return view('rr');
});
//admin panel to add branches
Route::get('/branch_adminpanel',[BranchesController::class,'create']);
Route::post('/add_branch',[BranchesController::class,'store']);


//find customer location
Route::get('/getUserCurrentLocation',[LocationsController::class,'find_user_location']);
Route::get('/find_nearest_locations',[LocationsController::class,'find_nearest_branches_from_user']);
Route::get('/setLocationsMarkers',[LocationsController::class,'set_markers_on_map']);
