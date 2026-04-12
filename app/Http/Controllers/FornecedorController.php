<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 0,
                'cnpj' => '00.000.000/000-00',
                'ddd' => '11',
                'telefone' => '4002-8922',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 1,
                'ddd' => '85',
                'telefone' => '4002-8922',
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 1,
                'ddd' => '32',
                'cnpj' => '00.000.000/000-00',
                'telefone' => '4002-8922',
            ],
        ];

        $fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
