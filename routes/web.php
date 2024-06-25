<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'loginPage'])->name('loginPage');
Route::get('/registerPage', [ArticleController::class, 'registerPage'])->name('registerPage');
Route::get('/user/create', [AuthController::class, 'userCreate'])->name('createUser');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //Route to Article Show Page
    Route::get('/home', [ArticleController::class, 'home'])->name('homePage');
    Route::get('/article/create', [ArticleController::class, 'createPage'])->name('createPage');
    Route::post('/artile/add', [ArticleController::class, 'addArticle'])->name('addArticle');
    Route::get('/editPage/{id}', [ArticleController::class, 'editPage'])->name('editPage');
    Route::post('/update', [ArticleController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [ArticleController::class, 'delete'])->name('delete');
});
