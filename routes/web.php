<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AttorneyController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegController;
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
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/attorney', [AttorneyController::class, 'index']);
Route::get('/contacts', [ContactsController::class, 'index']);
Route::post('/submit', [MainController::class, 'submit']);
Route::get('/auth', [AuthController::class, 'index']);
Route::get('/reg', [RegController::class, 'index']);
