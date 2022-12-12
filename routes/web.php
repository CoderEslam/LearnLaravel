<?php

use App\Http\Controllers\Front\User;
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
/* normal Route */
Route::get('/learn', function () {
    return 'Hello';
});

Route::get('/welcome', function () {
    return view('welcome');
});

/* Folder == namespace  => group of route*/
Route::namespace('/Front')->group(function () {
    // all route only access controller oy method in folder name Front
    Route::get('user', [User::class, 'show']);
});


