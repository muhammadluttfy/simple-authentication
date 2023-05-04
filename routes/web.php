<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticateController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::redirect('/', '/login');



// Route::middleware(['auth'])->group(function () {
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
// });

// Route::middleware(['guest'])->group(function () {
// START:: Authenticate Routes
Route::get('/login', [AuthenticateController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthenticateController::class, 'storeLogin'])->name('auth.storeLogin');
Route::get('/register', [AuthenticateController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthenticateController::class, 'storeRegister'])->name('auth.storeRegister');
Route::post('/logout', [AuthenticateController::class, 'logout'])->name('auth.logout');
    // END:: Authenticate Routes
// });
