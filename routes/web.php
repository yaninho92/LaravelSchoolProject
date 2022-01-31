<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DefaultController;
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

Route::get('/', [DefaultController::class, 'index']);
Route::get('post/{id}', [DefaultController::class, 'show'])->whereNumber('id');
Route::get('/contacter-nous', [ContactController::class, 'contactUs']);
