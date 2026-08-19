<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormExer1(){
        return view('exer1');
    }


    public function respostaExer1(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $soma = $valor1 + $valor2;

        return view('exer1', ['soma' => $soma]);
    
    }

     public function abrirFormExer2(){
        return view('exer2');
    }

    public function respostaExer2(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $sub = $valor1 - $valor2;

        return view('exer2', ['sub' => $sub]);
    
}
   public function abrirFormExer3(){
        return view('exer3');
    }

    public function respostaExer3(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $mult = $valor1 * $valor2;

        return view('exer3', ['mult' => $mult]);
    
}
    public function abrirFormExer4(){
        return view('exer4');
    }

    public function respostaExer4(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $div = $valor1 / $valor2;

        return view('exer4', ['div' => $div]);
    
}



    public function abrirFormExer5(){
        return view('exer5');
    }

    public function respostaExer5(Request $request){

        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;

        $med = ($valor1 + $valor2+ $valor3) /3;

        return view('exer5', ['med' => $med]);
    
}

public function abrirFormExer6(){
        return view('exer6');
    }

    public function respostaExer6(Request $request){

        $valor1 = $request->valor1;
               

        $fah = ( $valor1 * 1.8 ) + 32 ;

        return view('exer6', ['fah' => $fah]);
    
}

public function abrirFormExer7(){
        return view('exer7');
    }

    public function respostaExer7(Request $request){

        $valor1 = $request->valor1;
               

        $cel = ( $valor1 - 32) / 1.8 ;

        return view('exer7', ['cel' => $cel]);
    
}




























}