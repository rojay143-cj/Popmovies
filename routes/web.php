<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProductionController;
use Illuminate\Support\Facades\Route;


// Neutral routes
Route::get('/', function () {
    return view('index');
});
Route::get('/home', [HomeController::class, 'home'])->name('homepage');

// Auth routes
Route::post('/home', [AuthManager::class, 'LoginPost'])->name('login');
Route::post('/home/register',[AuthManager::class,'RegisterPost'])->name('register');
Route::match(['get', 'post'], '/logout', [AuthManager::class, 'Logout'])->name('logout');

// Admin routes
Route::group(['middleware' => 'check_login'], function () {
    Route::get('/Pop Admin Panel', [AdminController::class, 'admin_dashboard'])->name('Admin_Dashboard');
    // Production Routes
    Route::post('/Pop Admin Panel/AddTeam', [ProductionController::class, 'AddTeam'])->name('Add_Team');
    Route::post('/Pop Admin Panel/EditTeam/{teamid}', [ProductionController::class, 'EditTeam'])->name('Edit_Team');
    Route::post('/Pop Admin Panel/DeleteTeam', [ProductionController::class, 'DeleteTeam'])->name('Delete_Team');
    // Counyties Routes
    Route::post('/Pop Admin Panel/AddCountry', [CountryController::class, 'CountryPost'])->name('Add_Country');
    Route::post('/Pop Admin Panel/EditCountry{countryid}', [CountryController::class, 'EditCountry'])->name('Edit_Country');
    Route::post('/Pop Admin Panel/DeleteCountry/{countryid}', [CountryController::class, 'DeleteCountry'])->name('Delete_Country');
    // Genre Routes
    Route::post('/Pop Admin Panel/AddGenre', [GenreController::class, 'GenrePost'])->name('Add_Genre');
    Route::post('/Pop Admin Panel/EditGenre{genreid}', [GenreController::class, 'EditGenre'])->name('Edit_Genre');
    Route::post('/Pop Admin Panel/DeleteGenre/{genreid}', [GenreController::class, 'DeleteGenre'])->name('Delete_Genre');
    
    // Movie Routes
    Route::get('/Pop Admin Panel/fetchmovies',[MovieController::class, 'GetMovies'])->name('DT_movies');
    Route::post('/Pop Admin Panel/fetchedittomovie',[MovieController::class, 'GetEditMovie'])->name('get_edit_movie');
    Route::post('/Pop Admin Panel/AddMovie', [MovieController::class, 'MoviePost'])->name('Add_Movie');
    Route::post('/Pop Admin Panel/EditMovie', [MovieController::class, 'EditMovie'])->name('Edit_Movie');
    Route::post('/Pop Admin Panel/DeleteMovie', [MovieController::class, 'DeleteMovie'])->name('Delete_Movie');
});