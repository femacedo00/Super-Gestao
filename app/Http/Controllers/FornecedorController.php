<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor1'];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
