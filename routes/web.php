<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
// no.07 (praktikum 2)
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;

// no.09 (praktikum 2)
use App\Http\Controllers\PhotoController;



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

//PRAKTIKUM 2
// no. 04
Route::get('/hello', [WelcomeController::class,'hello']);

//no. 06
Route::get('/', [WelcomeController::class,'index']);

Route::get('/about', [WelcomeController::class,'about']);

Route::get('/articles/{id}', [WelcomeController::class,'articles']);

// no. 07
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticlesController::class);

//RESOURCE CONTROLLER
//no. 09
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
        ]);


//PRAKTIKUM 3
// no. 02
Route::get('/greeting', function () {
        return view('hello', ['name' => 'Amelia']);
    });

// no. 03
Route::get('/greeting', function () {
        return view('blog.hello', ['name' => 'Amelia']);
    });

// no.09
Route::get('/greeting', [WelcomeController::class,'greeting']);