<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JournalController;

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

Route::get('/', [PublicController::class, 'Welcome'])->name('welcome');


Route::get('/work', [WorkController::class, 'Work'])->name('work');


Route::get('/about', [AboutController::class, 'About'])->name('about');


Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');


Route::get('/journal', [JournalController::class, 'Journal'])->name('journal');
