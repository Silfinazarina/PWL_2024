<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    // public function greeting(){
    //     return view('blog.hello', ['name'=> 'Silfi Nazarina']);
    // }

    //pengubahan function greeting (langkah a)
    public function greeting(){
        return view('blog.hello')
            ->with('name','SIlfi Nazarina')
            ->with('occupation','Mahasiswa');
    }
}
