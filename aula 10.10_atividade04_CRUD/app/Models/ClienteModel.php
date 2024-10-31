<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ClienteModel extends Model
{

    use HasFactory;

    public static function salvar (Request $request){
        $status = DB::table( 'clientes' )->insert( [
            'nome'=>$request->input( 'nome' ),
            'cpf'=>$request->input( 'cpf' ),
            'telefone'=>$request->input( 'telefone' ),
            'email'=>$request->input( 'email' ),
        ] );
        return $status;

    }

    public static function listar(){
        $clientes = DB::table( 'clientes')->get();
        return $clientes;
    }

    public static function deletar($id){
        $status = DB::table('clientes')->delete($id);
        return $status;
    }



    public static function consultar ($id){//consultando peli id, para ver o fomulario os dados do cliente
        $cliente = DB::table('clientes')->where('id', $id)->first();
        return $cliente;
    }
    public static function atualizar(Request $request, $id){
        $status = DB::table('clientes')->where('id', $id)->update(([ 
            'nome'=> $request -> input ('nome'),
            'cpf'=> $request -> input ('cpf'),
            'telefone'=> $request -> input ('telefone'),
            'email'=> $request -> input ('email'),
            
            
            

        ]));
            return $status;
    }

}



//DEFINE A FUNÇÃO SALVAR PARA RECEBER ARGUMENTO REQUEST
//INSERINDO OS DADOS NO BANCO E COLOQUE A VARIAVEL PARA RETORNA O STATUS DO CONTROLLER