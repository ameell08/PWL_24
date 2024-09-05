<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
         return 'Halaman Artikel : '.$id;
    }
}
