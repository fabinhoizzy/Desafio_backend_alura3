@include('layouts.header')
@include('users._partials.navbar')

<br>
<div class="container-fluid table-responsive-sm">
    <h1 class="card-title" style="text-align: center">Importações Realizada - Detalhadas</h1>
    <br>
    <table class="table align-middle table-dark table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">Usuário</th>
            <th scope="col">Banco de Origem</th>
            <th scope="col">Agência de Origem</th>
            <th scope="col">Conta de Origem</th>
            <th scope="col">Banco de Destino</th>
            <th scope="col">Agência de Destino</th>
            <th scope="col">Conta de Destino</th>
            <th scope="col">Valor da Transação</th>
            <th scope="col">Hora que foi Realizada</th>
        </tr>
        </thead>

        <tbody class=>

            @foreach( $tabelas as $tabela)

                <tr>
                    <td>

                    </td>
                    <td>{{ $tabela->banco_origem}}</td>
                    <td>{{ $tabela->agencia_origem}}</td>
                    <td>{{ $tabela->conta_origem}}</td>
                    <td>{{ $tabela->banco_destino}}</td>
                    <td>{{ $tabela->agencia_destino}}</td>
                    <td>{{ $tabela->conta_destino}}</td>
                    <td>{{ number_format($tabela->valor_transacao,2,',','.')}}</td>
                    <td>{{ $tabela->hora_transacao}}</td>

                </tr>

        @endforeach

        </tbody>
    </table>
</div>
