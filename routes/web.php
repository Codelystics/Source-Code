<?php

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\EventHandlerController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
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

Route::get('/', [EventController::class, 'index'])->name("Home.index");

Route::get('/bootcamp', [BootcampController::class, 'index']);

Route::get('/competition', function () {
    return view('Competition/index');
});

# routing untuk home

# placeholder doang, kalo gaperlu hapus aja
Route::get("/login", [SessionController::class, 'loginPage'])->name('login');
Route::post("/login", [SessionController::class, 'authenticate'])->name('login');
Route::get("/logout", [SessionController::class, 'logout'])->name('logout'); 
Route::get("/register", [SessionController::class, 'registPage'])->name('register');
Route::post("/register", [SessionController::class, 'createUser'])->name('register');

# routing untuk view placeholder
Route::get('/main', [EventHandlerController::class, 'index'])->name('event.index');
Route::get('/create', [EventHandlerController::class,'create'])->name('event.create');
Route::post('/main', [EventHandlerController::class,'store'])->name('event.store');
Route::get('/event', function () {
    return view('Event/index');
});

Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit-form')->middleware('web');
