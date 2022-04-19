@extends('layouts.app')

@section('content')
    <h1>Listagem do Usuário - {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Deletar usuário?</button>
    </form>
@endsection
