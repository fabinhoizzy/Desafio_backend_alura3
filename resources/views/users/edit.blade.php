@extends('layouts.app')

@section('content')

    @include('users._partials.navbar')

    @include('includes.validations-form')

    <h1 class="card-title">Editar Usuário {{ $user->name }}</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST" class="container">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection
