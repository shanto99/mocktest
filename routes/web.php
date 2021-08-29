<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\QuestionController;

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
    return view('login');
});

Route::get('/home', [HomeController::class, 'index'])
    ->name('home')->middleware('auth');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/make_registration', [AuthController::class, 'make_registration'])
    ->name('register');
Route::post('/login', [AuthController::class, 'make_login'])
    ->name('login');
Route::post('/save_subject', [SubjectController::class, 'save_subject'])->name('create_subject');
Route::post('/save_chapter', [ChapterController::class, 'save_chapter'])->name('create_chapter');
Route::post('/save_question', [QuestionController::class, 'save_question'])
    ->name('save_question')->middleware('auth');
