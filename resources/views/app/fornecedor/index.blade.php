<h3>Fornecedor</h3>

@php
    // if(!<condicao>) {} // Enquanto executa se o retorno for true
@endphp

{{-- @unless executa se o retorno for false --}}


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não preenchido' }}
    <br>
@endisset
