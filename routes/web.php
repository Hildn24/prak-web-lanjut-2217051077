<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

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

Route::get('/', function () {return view('welcome');});

// Route untuk tugas 3
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/user/profile', [ProfileController::class, 'profile']);
Route::get('/user/create', function () {return view('create_user');});
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/profile/upload', [ProfileController::class, 'uploadProfilePicture'])->name('upload.profile.picture');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/show/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('/users', [UserController::class, 'index'])->name('user.list');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/user/list', [UserController::class, 'index'])->name('user.list');