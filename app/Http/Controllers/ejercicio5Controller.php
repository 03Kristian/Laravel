<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio5Controller extends Controller
{
    public function ejercicio5(){
        return view('Ejercicio_5.ejercicio5');
    }

    public function resultado_ejr5(Request $request){
        
        $num1 = $request->numero1;
        $num2 = $request->numero2;
        $operador = $request->caracter;


        if($operador == "+"){
            $resultado1 = $num1+$num2;
            echo"suma";
        }elseif($operador == "-"){
            $resultado1 = $num1-$num2;
            echo"resta";

        }elseif($operador == "/"){
            $resultado1 = $num1 / $num2;
            echo"division";

        }elseif($operador == "%"){
            echo"division";

            $resultado1 = $num1 % $num2;
        }elseif($operador == "*"){
            $resultado1 = $num1 * $num2;
            echo"multiplicacion";

        }else {
            echo "ACCION INVALIDA BRO...";
        }

        return view('Ejercicio_5.resultado_ejr5',compact("resultado1",'operador'));
    }
}
