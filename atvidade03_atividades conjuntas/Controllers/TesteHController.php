<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 

class TesteHController extends Controller

{

    public function homePage(){

        return view("homePage");
    }



    public function exercicio01(){

        $num = [2,4,8,16];

        return view('exercicio01', compact('num'));
    }

    public function exercicio02(){

        $number = [2,5];

        return view('exercicio02', compact('number'));
    }
    
    public function exercicio03(){
        $ID = 1;

        $hrstrabalhadas = 80;
        $salario = 0;
        $excesso = 0;

        return view('exercicio03', [
            'ID' => $ID,
            'hrstrabalhadas' => $hrstrabalhadas, 
            'salario' => $salario,
            'excesso' => $excesso
        ]
        );

    }

}