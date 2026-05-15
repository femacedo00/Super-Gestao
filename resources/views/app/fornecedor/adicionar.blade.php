@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <p>{{ $titulo }} - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li>
                    <a href="{{ route('app.fornecedor.adicionar') }}">Novo</a>
                    <a href="{{ route('app.fornecedor') }}">Consulta</a>
                </li>
            </ul>
        </div>
        
        <div class="informacao-pagina">
            {{ !empty($msg) ? $msg : null }}

            <div style="width:30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
                    @csrf

                    <input type="text" name="nome" placeholder="Nome" class="borda-preta" value="{{ old('nome') }}">
                    {{ $errors->has('nome') ? $errors->first('nome') : null}}
                    
                    <input type="text" name="site" placeholder="Site" class="borda-preta" value="{{ old('site') }}">
                    {{ $errors->has('site') ? $errors->first('site') : null}}
                    
                    <input type="text" name="uf" placeholder="UF" class="borda-preta" value="{{ old('uf') }}">
                    {{ $errors->has('uf') ? $errors->first('uf') : null}}
                    
                    <input type="email" name="email" placeholder="E-mail" class="borda-preta" value="{{ old('email') }}">
                    {{ $errors->has('email') ? $errors->first('email') : null}}
                    
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection