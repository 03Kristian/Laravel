<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio1Controller extends Controller
{
    //
    public function ejercicio1(){
        return view('Ejercicio_1.ejercicio1');
    }

    public function resultado_ejr1(Request $request){
        $parcial1 = $request->parcial1;
        $parcial2 = $request->parcial2;
        $parcial3 = $request->parcial3;

        $practica = $request->practica;

        $nota_final = $request->nota_final;

        $resultado1 = ($parcial1 + $parcial2 + $parcial3)/3;
        $L = $resultado1 * 0.5;

        $resultado2 = $practica * 0.3;

        $resultado3 = $nota_final * 0.2;

        $promedio = $L + $resultado2 + $resultado3;
        
        return view('Ejercicio_1.resultado_ejr1',compact('promedio','L','resultado2','resultado3'));
    }
}
