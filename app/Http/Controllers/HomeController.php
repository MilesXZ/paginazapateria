<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inicio(){
        return view('zapatos.inicio');
    }

    public function conocenos(){
        return view('zapatos.conocenos');
    }
}
