<h3>Fornecedor</h3>

@isset($fornecedores)
    @php
        $i = 0
    @endphp
    @while($i < count($fornecedores))
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
        @php
            $i++
        @endphp
    @endwhile
@endisset
