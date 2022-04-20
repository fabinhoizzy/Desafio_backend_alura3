@include('layouts.header')
@include('users._partials.navbar')

<br>
<h1 class="card-title align-items-center">Importações Realizada</h1>
<br>
<div class="table-responsive">
<table class="table table-dark table-sm">
    <thead class="table-dark">
    <tr>
        <th>Data Transações</th>
        <th>Data Importação</th>
    </tr>
    </thead>

    <tbody class="table-secondary">
    @foreach($tabela as $tabelas)
        <tr>
            <td>{{$tabelas->hora_transacao}}</td>
            <td>{{$tabelas->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
