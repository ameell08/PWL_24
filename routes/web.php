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

// --- PRAKTIKUM 1 ---
//BASIC ROUTING
// no. 02
Route::get('/hello', function () {
    return 'Hello World';
});

// no. 04
Route::get('/world', function () {
    return 'world';
});

// no. 06
Route::get('/greeter', function () {
    return 'Selamat Datang';
});

//no.07
Route::get('/about', function () {
    return '2241760008 | Amelia Wahyu Safitri';
});


//ROUTE PARAMETERS
// no.08
Route::get('/user/{name}', function ($name) {
    return 'Nama Saya  '.$name;
});

// no. 11
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- '.$postId. " komentar ke- : ".$commentId;
});

// no.13
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' .$id;
});

//OPTIONAL PARAMETERS
// no. 14
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama Saya  ' .$name;
});

// no. 17
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama Saya  ' .$name;
});

