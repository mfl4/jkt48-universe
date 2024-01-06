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

// Home
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Members
Route::prefix('members')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('members')->middleware('auth');
    Route::get('/{member:id}', [MemberController::class, 'show'])->name('member')->middleware('auth');
});

// Authentication
Route::group(['prefix' => 'auth'], function () {
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup')->middleware('guest');
    Route::post('/signup', [AuthController::class, 'store']);
    Route::get('/signin', [AuthController::class, 'signin'])->name('signin')->middleware('guest');
    Route::post('/signin', [AuthController::class, 'authenticate']);
    Route::post('/signout', [AuthController::class, 'signout'])->name('signout')->middleware('auth');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('pages.dashboard.index', [
        'title' => 'Dashboard',
        'users' => \App\Models\User::all()->count(),
        'members' => \App\Models\Member::all()->count(),
    ]);
})->name('dashboard')->middleware('isAdmin');

Route::resource('/dashboard/members', DashboardMemberController::class)->middleware('isAdmin');
