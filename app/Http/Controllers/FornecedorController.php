<?php

namespace App\Http\Controllers;

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

    public function adicionar()
    {
        return view('app.fornecedor.adicionar', [
            'titulo' => $this->titulo,
        ]);
    }
}
