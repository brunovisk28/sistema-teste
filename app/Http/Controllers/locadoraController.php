<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class locadoraController extends Controller
{
    public function index(Request $request){

        $dados = [
        'nome' => $request->input('nome'),
        'cpf'=> $request->input('cpf'),
        'numerodeRegistro' => $request->input('numerodeRegistro'),
        'datadeRetirada' => $request->input('datadeRetirada'),
        'datadeDevolução' => $request->input('datadeDevolução'),
        'veículo' => $request->input('veículo'),
        'quilometragem' => $request->input('quilometragem'),
        ];

        return view('locadora',$dados);
    }
}
