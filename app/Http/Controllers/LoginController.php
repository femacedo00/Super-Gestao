<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'login']);
    }

    public function autenticar(Request $request)
    {
        // Regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required',
        ];

        // Mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório',
        ];

        $request->validate($regras, $feedback);

        $email = $request->input('usuario');
        $password = $request->input('senha');

        $user = new User;
        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if (isset($usuario->name)) {
            echo 'existe';
        } else {
            echo 'n existe';
        }

        return 'auetnticando...';
    }
}
