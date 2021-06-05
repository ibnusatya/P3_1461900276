<?php

use App\Http\Controllers\KamarController0276;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('kamar0276', KamarController0276::class);

Route::resource('kamarTambah0276', KamarController0276::class);

Route::resource('kamarEdit0276', KamarController0276::class);