<?php

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

Route::get('/', function () {
    return view('posts'); //Load this when you get to the homepage
});

Route::get('post/{post}', function($slug){
    
     $post=file_get_contents(__DIR__ ."../resources/posts/{$slug}.html");
     return view('post',[
        'post'=>$post
     ]);
    

});




