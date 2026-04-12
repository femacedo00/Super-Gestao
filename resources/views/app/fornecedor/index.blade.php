<h3>Fornecedor</h3>

@php
    // if(!<condicao>) {} // Enquanto executa se o retorno for true
@endphp

{{-- @unless executa se o retorno for false --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if (!$fornecedores[0]['status'])
    Fornecedor Inativo
@endif
<br>
@unless ($fornecedores[0]['status'])
    Fornecedor Inativo
@endunless