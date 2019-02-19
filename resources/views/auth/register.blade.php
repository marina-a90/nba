<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name"/>
        @include('partials.invalid-feedback', ['field' => 'name'])
    </div>

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
            <label for="password confirmation">Password confirmation</label>
            <input type="password" class="form-control  {{ $errors->has('password confirmation') ? 'is-invalid' : '' }}" id="password confirmation" name="password confirmation"/>
            @include('partials.invalid-feedback', ['field' => 'password confirmation'])
        </div>

    {{-- @if($message = session('message')) 
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @endif --}}

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
</div>

</form>