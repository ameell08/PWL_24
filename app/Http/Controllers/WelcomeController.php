<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Amelia Wahyu | 2241760008';
    }
    
    public function articles($id) {
        return 'Halaman Artikel : '.$id;
    }

}
