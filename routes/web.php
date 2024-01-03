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
    Route::get('/', [MemberController::class, 'index'])->name('members');
    Route::get('/{member:id}', [MemberController::class, 'show'])->name('member');
});

// Authentication
Route::group(['prefix' => 'auth'], function () {
    Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup')->middleware('guest');
    Route::post('/signup', [AuthController::class, 'store']);
    Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin')->middleware('guest');
    Route::post('/signin', [AuthController::class, 'authenticate']);
    Route::post('/signout', [AuthController::class, 'signout']);
});

// Dashboard
Route::get('/dashboard', function () {
    return view('pages.dashboard.index', [
        'title' => 'Dashboard',
        'users' => \App\Models\User::all()->count(),
        'members' => \App\Models\Member::all()->count(),
    ]);
})->middleware('auth')->name('dashboard.index');

Route::resource('/dashboard/members', DashboardMemberController::class);
