<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\AttributionController;

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
    return view('home.index');
});

Route::resource('home',HomeController::class);
Route::resource('etablissement',EtablissementController::class);
Route::resource('equipe',EquipeController::class);
Route::resource('attribution',AttributionController::class);
