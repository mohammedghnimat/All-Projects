<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
});

Route::get('/movie',[MovieController::class,'index'])->name('movie.index');
Route::get('/movie/create',[MovieController::class,'create'])->name('movie.create');
Route::post('/movie',[MovieController::class,'store'])->name('movie.store');
Route::get('/movie/{movie}/edit',[MovieController::class,'edit'])->name('movie.edit');
Route::put('/movie/{movie}/update',[MovieController::class,'update'])->name('movie.update');
Route::delete('/movie/{movie}/delete',[MovieController::class,'delete'])->name('movie.delete');
// Remove this line if you don't need the create route
Route::get('/signup/create', [SignupController::class, 'create'])->name('signup.create');

Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Assuming you have a 'showLoginForm' method in your LoginController
Route::get('/movies/search', [MovieController::class, 'search'])->name('movies.search');
