<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email"/>
        @include('partials.invalid-feedback', ['field' => 'email'])
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control  {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password"/>
        @include('partials.invalid-feedback', ['field' => 'password'])
    </div>

    <div class="form-group">
<<<<<<< HEAD
        <input type="hidden" class="form-control  {{ $errors->has('message') ? 'is-invalid' : '' }}"/>
        @include('partials.invalid-feedback', ['field' => 'message'])
    </div>

    <div class="form-group">
=======
>>>>>>> 8ca68a6616f5b97c29001dee508c4e6366f67215
        <button type="submit" class="btn btn-primary">Login</button>
    </div>

</form>