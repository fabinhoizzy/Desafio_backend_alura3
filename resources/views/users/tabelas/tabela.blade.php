@include('layouts.header')
@include('users._partials.navbar')
<br>

<div class="container-fluid table-responsive-sm">
    <h1 class="card-title" style="text-align: center">Importações Realizada</h1>
    <br>
    <table class="table align-middle table-dark table-hover">
        <thead class="table-dark">
        <tr>
            <th>Data Transações</th>
            <th>Data Importação</th>
        </tr>
        </thead>

        <tbody>

        @foreach( $tabelas as $tabela)
            <tr>
                <td>{{ $tabela->hora_transacao}}</td>
                <td>{{ $tabela->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
