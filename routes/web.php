<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
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

Route::get('/', function () {return view('welcome');});

Route::resource('batiment', BatimentController::class);

Route::resource('formation', FormationController::class);

Route::resource('typeformation', TypeformationController::class);

Route::resource('eleve', EleveController::class);