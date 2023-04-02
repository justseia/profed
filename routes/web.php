<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home.index');

Route::get('/test', \App\Http\Controllers\Test\IndexController::class)->name('test.index');
Route::post('/test', \App\Http\Controllers\Test\StoreController::class)->name('test.store');
Route::post('/test/result', \App\Http\Controllers\Test\ResultController::class)->name('test.result');

Route::get('/professions', \App\Http\Controllers\Profession\IndexController::class)->name('profession.index');
Route::get('/professions/information/{profession}', \App\Http\Controllers\Profession\ShowController::class)->name('profession.show');

Route::get('/courses', \App\Http\Controllers\Course\IndexController::class)->name('course.index');
Route::get('/courses/information/{course}', \App\Http\Controllers\Course\ShowController::class)->name('course.show');
Route::get('/courses/purchase/{course}', \App\Http\Controllers\Course\PurchaseController::class)->name('course.purchase');
Route::get('/courses/purchase/{course}/buy', \App\Http\Controllers\Course\BuyCourseController::class)->name('course.buy');

Route::get('/profile', \App\Http\Controllers\Profile\IndexController::class)->name('profile.index');
Route::post('/profile', \App\Http\Controllers\Profile\StoreController::class)->name('profile.store');
Route::get('/profile/expert', \App\Http\Controllers\Profile\ExpertController::class)->name('expert.profile.index');
Route::get('/profile/expert/connect', \App\Http\Controllers\Profile\ExpertConnectController::class)->name('expert.profile.connect');

Route::get('/enroll/expert/{expert}', \App\Http\Controllers\Profile\ExpertController::class)->name('expert.enroll.index');

Route::get('/about', \App\Http\Controllers\About\IndexController::class)->name('about.index');

Auth::routes();
