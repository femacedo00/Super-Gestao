<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor1',
                'status' => 0,
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
