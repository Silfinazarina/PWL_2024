<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Silfi Nazarina -- 2241720054';
    }

    public function articles($Id){
        return 'Halaman Artikel dengan Id '. $Id ;
    }
}
