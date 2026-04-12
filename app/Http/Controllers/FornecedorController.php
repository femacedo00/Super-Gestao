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
            ],
            1 => [
                'nome' => 'Fornecedor 1',
                'status' => 1,
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
