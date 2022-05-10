<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practica1Controller extends Controller
{
    public function verformulariopractica1(){
        //para mostrar una vista esta el comando view('')
        return view('Practica_1.practica1');
    }

    public function resultadoPractica1(Request $request){
        
        //asigno a la variable $numero1 através de request lo del input numero1
        $numero1= $request->numero1;
        
        //compact('') Lleva el valor del metodo al formulario
        return view('Practica_1.resultado_pr1', compact('numero1'));
    }

}
