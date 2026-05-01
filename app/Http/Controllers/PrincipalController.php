<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    public function Principal()
    {
        $motivos_contatos = [
            1 => 'Dúvida',
            2 => 'Elogio',
            3 => 'Reclamação',
        ];

        return view('site.principal', ['motivos_contatos' => $motivos_contatos]);
    }
}
