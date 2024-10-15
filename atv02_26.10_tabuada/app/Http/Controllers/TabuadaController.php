<?php

    namespace App\Http\Controllers;
    use Illuminate\Htpp\Request;

    class TabuadaController extends Controller

{

    public function homePage (){
        return view('homePage');
    }

    public function tabuada (){
        $n = 2;
        return view('tabuada', compact('n'));
    }
}



