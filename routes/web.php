<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LetterController;

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

Route::get('/', [AppController::class, 'index'])->name('index');

// Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// User
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');

// PDF
Route::get('/pdf', [LetterController::class, 'index']);
Route::get('/pdf/reservation', [LetterController::class, 'reservationLetter']);
Route::get('/pdf/approval', [LetterController::class, 'approvalLetter']);
Route::post('/pdf/reservation/download', [LetterController::class, 'downloadReservationLetter']);
Route::post('/pdf/approval/download', [LetterController::class, 'downloadApprovalLetter']);
