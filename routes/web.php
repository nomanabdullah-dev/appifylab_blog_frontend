<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/blog/{slug}', [BlogController::class, 'blogSingle']);
Route::get('/category/{categoryName}/{slug}', [BlogController::class, 'categoryIndex']);
Route::get('/tag/{tagName}/{slug}', [BlogController::class, 'tagIndex']);
Route::get('/blogs', [BlogController::class, 'allBlogs']);
Route::get('/search', [BlogController::class, 'search']);

Route::get('/about', [BlogController::class, 'about']);
Route::get('/contact', [BlogController::class, 'contact']);
Route::get('/contact_me', [BlogController::class, 'contact_me']);
Route::get('/faq', [BlogController::class, 'faq']);
Route::get('/gallery', [BlogController::class, 'gallery']);
