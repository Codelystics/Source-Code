<?php

use App\Http\Controllers\EventHandlerController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

# placeholder doang, kalo gaperlu hapus aja
Route::get('/login', [SessionController::class, 'index']);
Route::post("/login", [SessionController::class, 'authenticate'])->name('login'); 
Route::get('/main', [EventHandlerController::class, 'index'])->name('event.index');
Route::get('/create', [EventHandlerController::class,'create'])->name('event.create');
Route::post('/main', [EventHandlerController::class,'store'])->name('event.store');git