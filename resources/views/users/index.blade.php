@extends('layouts.app')

@section('content')

    @include('users._partials.navbar')
    <br>

    <h1 class="card-title align-items-center">
        Listagem dos usuários
        <a class="btn btn-primary" href="{{ route('users.create') }}"> Adicionar novo usuário

        </a>
    </h1>

    <div class="table">
        <table class="table table-dark table-sm">
            <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Opcões</th>

            </tr>
            </thead>

            <tbody class="table-secondary">
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a class="btn btn-primary"  href="{{ route('users.edit', $user->id) }}">Editar</a>
                        <a class="btn btn-success"  href="{{ route('users.show', $user->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>
@endsection
