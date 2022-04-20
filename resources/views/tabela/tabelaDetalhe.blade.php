@include('layouts.header')
@include('users._partials.navbar')

<h1>Importações Realizada - Detalhadas</h1>

<table class="table table-dark table-sm">
    <thead class="table-dark">
    <tr>
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

    <tbody class="table-secondary" >
    @foreach($tabela as $tabelas)
        <tr>
            <td>{{$tabelas->banco_origem}}</td>
            <td>{{$tabelas->agencia_origem}}</td>
            <td>{{$tabelas->conta_origem}}</td>
            <td>{{$tabelas->banco_destino}}</td>
            <td>{{$tabelas->agencia_destino}}</td>
            <td>{{$tabelas->conta_destino}}</td>
            <td>{{number_format($tabelas->valor_transacao,2,',','.')}}</td>
            <td>{{$tabelas->hora_transacao}}</td>

        </tr>
    @endforeach
    </tbody>
</table>
