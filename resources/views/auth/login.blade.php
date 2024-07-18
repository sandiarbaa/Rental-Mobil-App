@extends('layouts.second')

@section('content')
<div class="row justify-content-center vh-100 align-items-center">
    <div class="col-md-6">
        {{-- Flash Message --}}
        @if (session('registerSuccess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ session('registerSuccess') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p>{{ session('loginError') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Card Form --}}
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">{{ __('Login') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark">{{ __('Login') }}</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>

        {{-- Link Register --}}
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="{{ route('register') }}" class="text-dark">Register</a></p>
        </div>
    </div>
</div>
@endsection
    
