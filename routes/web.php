<?php

use Faker\Core\Number;
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

/* normal Route with required parameter */
Route::get('/learn/{id}', function ($id) {

    $isInt = is_numeric($id);

    if ($isInt) {

        return 'Hello' . $id;

    } else {
        return 'non number';
    }
})->name('learn');
/* normal Route with required parameter */
Route::get('/learn/non/{id?}', function ($id) {

    $isInt = is_numeric($id);

    if ($isInt) {

        return 'non required' . $id;

    } else {
        return 'non number';
    }
})->name('learnnon');
/* normal Route with required parameter */
Route::get('/learn/name/{name}', function ($name) {

    $is_string = is_string($name);

    if ($is_string) {

        return 'Hello ' . $name;

    } else {
        return 'nothing';
    }
});

Route::get('/welcome', function () {
    return view('welcome');
});
