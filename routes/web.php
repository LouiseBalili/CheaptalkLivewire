<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PostComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CreatePost;

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

Route::get('/', HomeComponent::class)->name('home');
Route::get('/posts', PostComponent::class)->name('posts');
Route::get('/create-post', CreatePost::class)->name('create-post');
Route::get('/categories', CategoryComponent::class)->name('categories');
