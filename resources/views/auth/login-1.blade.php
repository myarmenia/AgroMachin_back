@extends('layouts.login_app')

@section('content')
<div class="Police">
    <div class="loginData">
    <div class="login">
        <div class="policeData">
        <div class="logo"></div>
        <div class="verticalLine"></div>
        <div class="data">
            <h2>Մուտքային տվյալներ</h2>
            <form id="form_log_in" class="form">
            <input
                name="email"
                type="email"
                placeholder="Էլ. փոստ"
                value=""
            />
            <input
                name="password"
                id="password"
                type="password"
                class="password"
                placeholder="Գաղտնաբառ"
            />
            <input
                name="password"
                type="password"
                style="display: none"
                class="newPassword disabledpassword"
                placeholder="Նոր գաղտնաբառ"
                disabled
            />
            <input
                name="confirm_password"
                type="password"
                style="display: none"
                class="newPassword disabledpassword"
                placeholder="Կրկնել գաղտնաբառը"
                disabled
            />
            <button class="button" type="submit">Մուտք</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    <p>ՀՀ Ոստիկանության «Ճանապարհային Ոստիկանություն»</p>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
