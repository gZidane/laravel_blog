<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/new', [ArticlesController::class, 'new'])->name('articles.new');
Route::get('/articles/details/{article_id}', [ArticlesController::class, 'details'])->name('articles.details');
Route::get('/articles', [ArticlesController::class, 'store'])->name('articles.store');

Route::post('/articles/search', [ArticlesController::class, 'search'])->name('articles.search');


