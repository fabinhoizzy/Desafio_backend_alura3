@csrf
<label for="exampleFormControlInput1" class="form-label">Name</label>
<input type="text" name="name" value="{{ $user->name ?? old('name') }}"><br>

<label for="exampleFormControlInput1" class="form-label">Email</label>
<input type="email" name="email"  value="{{ $user->email ?? old('email') }}"><br>

<label for="exampleFormControlInput1" class="form-label">Senha</label>
<input type="password" name="password"><br><br>

<button class="btn btn-primary" type="submit">Enviar</button>

