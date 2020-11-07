<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

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


Route::get('/tweets/{tweet}/html', [TweetController::class, 'html'])->name('tweet.html')->where('tweet', '.*');
Route::get('/tweets/{tweet}', [TweetController::class, 'image'])->name('tweet.image')->where('tweet', '.*');

Route::get('/', function () {
    return view('welcome');
});
