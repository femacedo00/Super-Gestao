<h3>Fornecedor</h3>

@isset($fornecedores)
    @forelse($fornecedores as $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido' }}
        <br>
        DDD: {{ $fornecedor['ddd'] ?? 'Dado não preenchido' }}
        <br>
        Telefone: {{ $fornecedor['telefone'] ?? 'Dado não preenchido' }}
        <br>
        @switch($fornecedor['ddd'])
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
        @if ($loop->first)
            Primeira iteração do loop
            <br>
        @endif
        @if ($loop->last)
            Última iteração do loop
            <br>
            Total de registros: {{ $loop->count }}
            <br>
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset
