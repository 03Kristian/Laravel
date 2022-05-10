<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercico3Controller extends Controller
{
    public function ejercicio3(){
        return view('Ejercicio_3.ejercicio3');
    }

    public function resultado_ejr3(Request $request){
        $nombre = $request->nombre;
        $horas= $request->horas;
        $vrl_hora= $request->vrl_hora;
        $bono = $request->bono;
        $ax_transporte = $request->ax_transporte;
        $credito= $request->credito;

        $saldo= $horas * $vrl_hora + $bono + $ax_transporte + $credito;

        return view('Ejercicio_3.resultado_ejr3', compact('saldo'));
    }
}
