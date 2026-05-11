<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controllers\HasMiddleware;

class SobreNosController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'log.acesso',
        ];
    }

    public function sobreNos()
    {
        return view('site.sobre-nos');
    }
}
