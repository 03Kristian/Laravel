<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio6Controller extends Controller
{
    public function ejercicio6(){
        return view('Ejercicio_6.ejercicio6');
    }

    public function resultado_ejr6(Request $request){
        $sueldo = $request->sueldo;
        $clase = $request->clase;
        $vacio="";
        $saldo=0;

        if ($clase == 1) {
            $saldo = $sueldo * 0.2;
        }elseif ($clase == 2) {
            $saldo = $sueldo * 0.15;
        }elseif ($clase == 3) {
            $saldo = $sueldo * 0.2;
        }elseif ($clase == 4) {
            $saldo = $sueldo * 0.07;
        }else {
            $vacio = "No cuentas con Bono!!";
        }

        return view('Ejercicio_6.resultado_ejr6',compact('saldo','vacio','sueldo'));
    }
}
