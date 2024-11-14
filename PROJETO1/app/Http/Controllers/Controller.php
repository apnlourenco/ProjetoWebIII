<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ClienteModel;




abstract class Controller
{
    public function create(){
        return view('Cliente.create');
    }  

    public function destroy($id){
        $status = ClienteModel::deletar($id);
        if ($status) {
            return redirect('listarCliente')->with('mensagem', 'Cliente deletado com sucesso');
        } else {
            return redirect('listarCliente')->with('mensagem', 'Cliente não encontrado');
        }
    }

    public function edit($id){
        $cliente = ClienteModel::consultar($id);
        return view('Cliente.edit', compact('cliente'));
    }
}
