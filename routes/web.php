<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers\MainController as MainController;
use App\Http\Controllers\Controllers\TravelController as TravelController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/Travels', [TravelController::class, 'index']);

Route::get('/addTrain', [MainController::class, 'addTrain']);
Route::get('/addTravel', [TravelController::class, 'addTravel']);
