@csrf
<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" value="{{ $user->name ?? old('name') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" value="{{ $user->email ?? old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembra-me</label>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>


