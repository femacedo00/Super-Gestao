<h3>Fornecedor</h3>

@php
    // if(!<condicao>) {} // Enquanto executa se o retorno for true
@endphp

{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    @for($i = 0; $i < count($fornecedores); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não preenchido' }}
        <br>
        DDD: {{ $fornecedores[$i]['ddd'] ?? 'Dado não preenchido' }}
        <br>
        Telefone: {{ $fornecedores[$i]['telefone'] ?? 'Dado não preenchido' }}
        <br>
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza - CE
                @break

            @default
            Estado não identificado
        @endswitch
        <br>
        <hr>
    @endfor
@endisset
