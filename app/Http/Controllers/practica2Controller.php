<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class practica2Controller extends Controller
{
    public function practica2(){
        /* echo "Aqui ta"; */
        return view('Practica_2.practica2');
    }

    public function resultado_pr2(Request $request){
        $numero1 = $request->numero1;

        $i=0;
        $factorial=1;

        if ($numero1 <20){
        while ($i < $numero1) {
            $i = $i+1;
            $factorial = $factorial * $i;
        }
        /* echo $numero1; */
        
        
    }else{
        echo "numero no valido";
    }

    return view('Practica_2.resultado_pr2', compact('factorial'));
    }
}
