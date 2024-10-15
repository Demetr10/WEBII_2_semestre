<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Cliente extends Controller
 {
    public function create() {
        return view( 'Cliente.create' );
    }

    public function store( Request $resquest ) {
        $status = DB::table( 'cliente' )->insert( [
            'nome'=>$resquest->input( 'nome' ),
            'cpf'=>$resquest->input( 'cpf' ),
            'telefone'=>$resquest->input( 'telefone' ),
            'email'=>$resquest->input( 'email' ),
        ] );

        if ( $status ) {
            return redirect()->back()->with( 'mensagem', 'Cliente cadastrado!!' );
        } else {
            return redirect()->back()->with( 'mensagem', 'Erro' );
        }

    }

 }