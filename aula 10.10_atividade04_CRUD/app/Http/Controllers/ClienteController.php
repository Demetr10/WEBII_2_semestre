<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ClienteModel;

class ClienteController extends Controller
 {
    public function create() {
        return view('Cliente.create');
    }

    public function store( Request $request ) {
        $status = ClienteModel::salvar($request); //todos os dados antes estão inseridos no 'clienteModel'

        if ( $status ) {
            return redirect()->back()->with( 'mensagem', 'Cliente cadastrado!!' );
        } else {
            return redirect()->back()->with( 'mensagem', 'Erro' );
        }

    }

    public function index(){
        $clientes = ClienteModel::listar();
        return view('Cliente.index', compact('clientes'));


    }
    public function destroy($id) {
        $status = ClienteModel::deletar($id); 
    
        if ($status) {
            return redirect('listarCliente')->with('mensagem', 'Cliente deletado!!');
        } else {
            return redirect('listarCliente')->with('mensagem', 'Cliente não existe'); 
        }
    }
    public  function edit ($id){//editar cliente e os dados
        $cliente = ClienteModel::consultar($id);
        return view ('Cliente.edit',compact('cliente'));
    }
    public  function update (Request $request, $id){//editar cliente e os dados
        $status = ClienteModel::atualizar($request,$id);
        if($status){
            return redirect('/listarCliente')->with('mensagem', 'cliente atualizado mona');

        }else{
            return redirect('/listarCliente')->with('mensagem', 'cliente não atualizado mona');

        }
    }
   /* public function __construct()
{
    $this->middleware('auth');
}
*/
 }    