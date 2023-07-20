<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\Home;
use App\Http\Livewire\PostList;
use App\Http\Livewire\Test;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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


// Route::get("/",function(){
//     return view("welcome");
// });


// Route::get("/",function(){
//     return view("components.layouts.app");
// });

Route::get("/",Home::class);
Route::get("/posts",PostList::class)->name("postList");


