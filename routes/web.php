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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/members', function () {
    return view('pages.members');
});

Route::get('/members', [MemberController::class, 'index']);

Route::get('/members/{post:id}', [MemberController::class, 'show']);

Route::get('/signin', [AuthController::class, 'signin'])->name('signin')->middleware('guest');
Route::post('/signin', [AuthController::class, 'authenticate']);
Route::post('/signout', [AuthController::class, 'signout']);

Route::get('/signup', [AuthController::class, 'signup'])->name('signup')->middleware('guest');
Route::post('/signup', [AuthController::class, 'store']);

Route::get('/signin', function () {
    return view('pages.auth.signin');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index', [
        'title' => 'Dashboard',
    ]);
});

Route::resource('/dashboard/members', DashboardMemberController::class);
