<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    private $titulo = 'Fornecedor';

    public function index()
    {
        return view('app.fornecedor.index', [
            'titulo' => $this->titulo,
        ]);
    }

    public function listar()
    {
        return view('app.fornecedor.listar', [
            'titulo' => $this->titulo,
        ]);
    }

    public function adicionar(Request $request)
    {
        $msg = null;

        if (! empty($request->input('_token'))) {
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedback = [
                'required' => 'O campo ":atribute" é obrigatório',
                'nome.min' => 'O mínimo para preencher o nome é de 2 daracteres',
                'nome.max' => 'O máximo para preencher o nome é de 40 daracteres',
                'uf.min' => 'O mínimo para preencher o uf é de 2 daracteres',
                'uf.max' => 'O máximo para preencher o uf é de 2 daracteres',
                'email' => 'Forneça um e-mail válido',
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor;
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso';
        }

        return view('app.fornecedor.adicionar', [
            'titulo' => $this->titulo,
            'msg' => $msg,
        ]);
    }
}
