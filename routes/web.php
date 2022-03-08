<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ovsController;
use App\Http\Controllers\Relation;

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

Route::get('/', function () {
    return view('welcome');
});

//Admin login Routs
Route::get('/admin/login',[AdminLoginController::class,'login'])->name('admin.login');
Route::post('/admin/login/submit',[AdminLoginController::class,'submit'])->name('admin.submit');

Route::get('Dashboard',[AdminLoginController::class,'dashboard'])->name('dashboard');
Route::get('/admin/dashboard', 'AdminLoginController@adminDash')->name('admin.dash');
Route::post('admin/logout','AdminLoginController@adminLogout')->name('admin.logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/relation',[Relation::class,'categories']);

//main project

Route::get('/candidate_create',[ovsController::class,'candidate'])->name('candidate.create');
Route::get('/candidate_new',[ovsController::class,'create'])->name('candidate.new');
Route::POST('/candidate_submit',[ovsController::class,'submit'])->name('candidate.submit');
Route::get('/candidate_edit/{id}',[ovsController::class,'edit'])->name('candidate.edit');
Route::POST('/candidate_update/{id}',[ovsController::class,'update'])->name('candidate.update');
Route::get('delete_candidate/{id}',[ovsController::class,'delete'])->name('candidate.delete');

// user dashboard
Route::get('/user/tables',[ovsController::class,'tables'])->name('user.table');
