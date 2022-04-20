@include('layouts.header')
@include('users._partials.navbar')

<h1>Importa Transações</h1>

<div class="mb-3" >
    <form  action="{{ route('csv.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="formFile" class="form-label"></label>
        <input class="form-control " name="file" type="file"><br>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</div>



