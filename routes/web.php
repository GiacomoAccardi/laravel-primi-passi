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

Route::get('/', function () {

    $message = 'Mi sa che Laravel mi piace';

    return view('welcome', compact('message'));
})->name('home');

Route::get('/info', function () {
    return view('info');
})->name('info');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');