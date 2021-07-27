<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/blog/{slug}', [BlogController::class, 'blogSingle']);
Route::get('/category/{categoryName}/{slug}', [BlogController::class, 'categoryIndex']);
Route::get('/tag/{tagName}/{slug}', [BlogController::class, 'tagIndex']);
Route::get('/blogs', [BlogController::class, 'allBlogs']);
