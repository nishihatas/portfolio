<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// ポートフォリオ：トップページ
Route::get('/', function () {
    return view('portfolio/index');
});

// ポートフォリオ：メール投稿
Route::post('/send_email', [Controllers\FormController::class, 'sendEmail'])->name('sendEmail');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

