<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

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


Route::resource('', WebsiteController::class)->only('index');
Route::resource('dashboard', DashboardController::class);
Route::resource('home', HomeController::class);
Route::resource('project', ProjectController::class);
Route::get('/get-detail-project',[ProjectController::class,'getDetail'])->name('project.get-detail');
