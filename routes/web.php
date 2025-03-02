<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $sections=DB::table('sections')->get();
    return view('welcome',compact('sections'));
});
Route::resource('sections',SectionsController::class);
Route::resource('products',ProductsController::class);