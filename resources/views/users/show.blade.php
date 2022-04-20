@extends('layouts.app')

@section('content')

    @include('users._partials.navbar')
    <br>
    <h1 class="card-title"> Dados de Usuário - {{ $user->name }}</h1>
    <br>
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Opções</th>
            </tr>
            </thead>

            <tbody class="table-secondary">
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Editar</a>
                </td>
            </tr>

            </tbody>
        </table>
    </div>


    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Deseja excluir ?</button>
        <a class="btn btn-primary" href="{{ route('users.index', $user->id) }}">Voltar</a>
    </form>

