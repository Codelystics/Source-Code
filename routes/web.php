<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home/index');
});

Route::get('/bootcamp', function () {
    return view('Bootcamp/index');
});

Route::get('/competition', function () {
    return view('Competition/index');
});

Route::get('/login', function(){
    return view('Login/index');
});

Route::get('/regis', function () {
    return view('Regis/index');
});
Route::get('/event', function () {
    return view('Event/index');
});

Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit-form')->middleware('web');
Route::get('/login', function(){
    return view('Login/index');
});

Route::get('/regis', function () {
    return view('Regis/index');
});

Route::get('/login', function(){
    return view('Login/index');
});

Route::get('/regis', function () {
    return view('Regis/index');
});