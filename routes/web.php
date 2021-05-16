<?php

use App\Http\Controllers\Cronjobs;
use App\Http\Controllers\Home;
use App\Http\Controllers\Misc;
use Illuminate\Http\Request;
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

Route::get('', [Home::class, 'home']);
Route::get('p/{post:id}', [Home::class, 'post']);
Route::get('خبر/{post:slug}', [Home::class, 'post']);
Route::get('cat/{category:id}', [Home::class, 'cat']);
Route::get('search', [Home::class, 'search']);
Route::get('news', [Home::class, 'news']);
Route::get('تصنيف/{category:slug}', [Home::class, 'category']);


Route::get('uploads/{w}-{h}/{filename}', [Misc::class, 'image'])->where('filename', '(.*)');


Route::get('cronjobs/erate', [Cronjobs::class, 'erate']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
