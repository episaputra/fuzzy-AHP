@extends('layout.login')

@section('konten')

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group mb-3">
        <label for="emailaddress">Email address</label>
        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
            required autocomplete="email" autofocus type="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="password">Password</label>
        <input class="form-control @error('password') is-invalid @enderror" name="password" required
            autocomplete="current-password" type="password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


    <div class="form-group mb-0 text-center">
        <button class="btn btn-success btn-block" type="submit"> Log In </button>
    </div>

</form>

@endsection
