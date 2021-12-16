<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProudatController;

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


Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/user-research', function () {
    return view('user-research');
});
Route::get('/web-development', function () {
    return view('web-development');
});

Route::get('/', [ProudatController::class, 'Items']);
