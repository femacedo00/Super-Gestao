<?php

namespace App\Http\Controllers;

class ContatoController extends Controller
{
    public function contato()
    {
        var_dump($_GET);

        return view('site.contato', ['titulo' => 'Contato']);
    }
}
