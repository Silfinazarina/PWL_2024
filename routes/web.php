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
    return view('welcome');
});

//BASIC ROUTING

// langkah a
Route::get('/hello', function () { return 'Hello World';
});

//langkah b
Route::get('/world', function () { return 'World';
});

//Tugas 1
Route::get('/', function(){
    return 'Selamat Datang';
});

//Tugas 2
Route::get('/about', function(){
    return '2241720054 - Silfi Nazarina' ;
});


//ROUTE PARAMETERS

//langkah a
Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name;
});

//langkah c
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
    
//tugas 1
Route::get('/articles/{id}', function ($id){
    return 'Halaman Artikel dengan ID '. $id;
});


//OPTIONAL PARAMETERS

//langkah a
Route::get('/user/{name?}', function ($name=null){
    return 'Nama saya '.$name;
});

//ubah langkah a
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});


//ROUTE NAME
//langkah percobaan 1
Route::get('/user/profile', function(){
    //
})->name('profile');