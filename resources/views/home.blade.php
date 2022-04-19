<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Importar Transações</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">

</nav>

<h1>Importa Transações</h1>

<div class="input-group">
    <form class="input-group" action="{{ route('csv.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="formFileSm" class="form-label"></label>
        <input class="form-control form-control-sm" name="file" type="file">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</div>

<h1>Importações Realizada</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Data Transações</th>
        <th scope="col">Data Importação</th>
    </tr>
    </thead>

    <tbody>
    @foreach($tabela as $tabelas)
        <tr>
            <td>{{$tabelas->hora_transacao}}</td>
            <td>{{$tabelas->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>

