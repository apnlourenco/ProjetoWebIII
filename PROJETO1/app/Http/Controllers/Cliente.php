<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ClienteModel;

class Cliente extends Controller
{
    public function create(){
        return view('Cliente.create');
    }

    public function store(Request $request){
        $status = ClienteModel::salvar($request);     
        
        if($status){
            return redirect()->back()->with('mensagem','Cliente cadastrado com sucesso!');
        }
        else{
            return redirect()->back()->with('mensagem','Erro ao cadastrar o cliente. Tente novamente!');
        }
    }
    public function index(){
        $clientes = ClienteModel::listar();
        return view('Cliente.index', compact('clientes'));   
}
    public function show($id){
        $cliente = ClienteModel::consultar($id);
        return view('Cliente.show', compact('cliente'));


    }
        
 
}