<?php

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/creators', function () {
    return view('creators');
});
Route::get('/creator', function () {
    return view('creator');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/new', function () {
    return view('new');
});