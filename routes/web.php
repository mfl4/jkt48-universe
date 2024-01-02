<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardMemberController;
use App\Http\Controllers\MemberController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

// Home
Route::get('/', function () {
    return view('pages.home');
});

// Members
Route::get('/members', [MemberController::class, 'index']);
Route::get('/members/{post:id}', [MemberController::class, 'show']);

// Authentication
Route::group(['prefix' => 'auth', 'middleware' => ['auth']], function () {
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup')->middleware('guest');
    Route::post('/signup', [AuthController::class, 'store']);
    Route::get('/signin', [AuthController::class, 'signin'])->name('signin')->middleware('guest');
    Route::post('/signin', [AuthController::class, 'authenticate']);
    Route::post('/signout', [AuthController::class, 'signout']);
});

// Dashboard
Route::get('/dashboard', function () {
    return view('pages.dashboard.index', [
        'title' => 'Dashboard',
    ]);
});

Route::resource('/dashboard/members', DashboardMemberController::class);
