<?php

namespace App\Http\Controllers;
use app\models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inicio(){
        return view('zapatos.inicio');
    }

    public function conocenos(){
        return view('zapatos.conocenos');
    }

    public function registrate(){
        return view('zapatos.registrate');
    }
    public function conforth(){
        return view('zapatos.mujer.conforth');
    }
    public function vestirhombre(){
        return view('zapatos.hombre.vestirhombre');
    }
    public function compra(){
        return view('zapatos.compra');
    }
    public function ubicanos(){
        return view('zapatos.ubicanos');
    }
    public function botasmujer(){
        return view('zapatos.mujer.botasmujer');
    }
    public function tacon(){
        return view('zapatos.mujer.tacon');
    }
    public function tenismujer(){
        return view('zapatos.mujer.tenismujer');
    }
    public function tenisniña(){
        return view('zapatos.niña.tenisniña');
    }
    public function zapatosniña(){
        return view('zapatos.niña.zapatosniña');
    }
    public function escolarniña(){
        return view('zapatos.niña.escolarniña');
    }
    public function tenisniño(){
        return view('zapatos.niño.tenisniño');
    }
    public function zapatosniño(){
        return view('zapatos.niño.zapatosniño');
    }
    public function escolarniño(){
        return view('zapatos.niño.escolarniño');
    }
    public function botashombre(){
        return view('zapatos.hombre.botashombre');
    }
    public function comun(){
        return view('zapatos.hombre.comun');
    }
    public function tenishombre(){
        return view('zapatos.hombre.tenishombre');
    }
    public function hombre(){
        return view('zapatos.hombre.hombre');
    }
    public function mujer(){
        return view('zapatos.mujer.mujer');
    }
    public function niño(){
        return view('zapatos.niño.niño');
    }
    public function niña(){
        return view('zapatos.niña.niña');
    }
    public function catalogocompleto(){
        return view('zapatos.catalogocompleto');
    }
    public function login(){
        return view('zapatos.login');
    }
}
