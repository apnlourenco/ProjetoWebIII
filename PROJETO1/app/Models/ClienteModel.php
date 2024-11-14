<?php

namespace App\Models;

use Illuminate\Contracts\Database\ModelIdentifier;
use Iluminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteModel extends Model
{


    public static function salvar(Request $request){
        $status = DB::table('cliente')->insert([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'cpf' => $request->input('cpf'),

        ]);
        return $status;
    }
    
    public static function listar(){
    $clientes = DB::table('cliente')->get();
    return $clientes;
}
    public static function deletar ($id){
    $status = DB::table('cliente')->delete($id);
    return $status;
}
    public static function consultar($id){
        $cliente = DB::table('cliente')->where('id', $id)->first();
        return $cliente;
    }
}