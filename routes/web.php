<?php

use App\Http\Controllers\Front\User;
use App\Http\Controllers\PenController;
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
    return view('test ');
});

/* Folder == namespace  => group of route*/
//http://127.0.0.1:8000/user
Route::namespace('/Front')->group(function () {
    // all route only access controller oy method in folder name Front
    Route::get('user', [User::class, 'show']);
});

//http://127.0.0.1:8000/eslam/name
Route::prefix('eslam')->group(function () {
    Route::get('name', [User::class, 'show']);
});

// bast case
Route::group(/*array*/ ['prefix' => 'android'], function () {

    Route::get('/', function () {
        return 'Working';
    });
    Route::get('job', [User::class, 'myJob']);

});
// we can write middleware like this or we can make it in group
Route::get('/check', function () {
    return 'middleware';
})->middleware('auth');

Route::group(/*array*/ ['prefix' => 'androidAuth', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return 'Working';
    });
    Route::get('job', [User::class, 'myJob']);

});

//Route::get('/pen', [PenController::class, 'index']);


// bast case
Route::group(/*array*/ ['prefix' => '/pen'], function () {
    Route::get('/show/{id}', [PenController::class, 'show']);
});
