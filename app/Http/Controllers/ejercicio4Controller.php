<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio4Controller extends Controller
{
    public function ejercicio4(){
        return view('Ejercicio_4.ejercicio4');
    }

    public function resultado_ejr4(Request $request){
        $x = $request->numero;

        $potencia= pow($x,2);
        $resultado= 3*$potencia + 7*$x -15;
        return view('Ejercicio_4.resultado_ejr4', compact('resultado'));
        
    }
}
