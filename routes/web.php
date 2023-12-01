<?php

use App\Http\Controllers\Alternatif;
use App\Http\Controllers\Beranda;
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

Route::get('/', [Beranda::class, 'index']);
Route::get('/alternatif', [Alternatif::class, 'index']);
