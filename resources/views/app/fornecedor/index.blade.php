<h3>Fornecedor</h3>

@php
    // if(!<condicao>) {} // Enquanto executa se o retorno for true
@endphp

{{-- @unless executa se o retorno for false --}}


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        <br>
    @endisset

    @unless ($fornecedores[1]['status'])
        Fornecedor Inativo
    @endunless
@endisset
