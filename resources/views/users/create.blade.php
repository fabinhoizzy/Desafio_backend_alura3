@extends('layouts.app')

@section('content')

    @include('users._partials.navbar')

    <h1>Novo Usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="POST" class="container">
        @csrf
        @include('users._partials.form')
    </form>
@endsection
