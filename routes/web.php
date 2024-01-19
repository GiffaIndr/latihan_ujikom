<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Models\Auth;
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

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user');
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/landing', [dashboardController::class, 'landing'])->name('landing');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login/input', [AuthController::class, 'loginAccount'])->name('login.input');
    Route::post('/login/Auth', [AuthController::class, 'Auth'])->name('login.auth');

    Route::get('/edit-user/{id}', [DashboardController::class, 'editUser'])->name('userEdit');
    Route::patch('/update-user/{id}', [DashboardController::class, 'editAccount'])->name('editAccount');

    Route::post('/create', [DashboardController::class, 'createUser'])->name('user.create');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/pendaftaran', [DashboardController::class, 'pendaftaran'])->name('pendaftaran');
    Route::delete('/delete/{id}', [DashboardController::class, 'destroy'])->name('delete');
