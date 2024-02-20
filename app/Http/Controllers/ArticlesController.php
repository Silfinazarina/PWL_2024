<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles($Id){
        return 'Halaman Artikel dengan Id '. $Id ;
    }
}
