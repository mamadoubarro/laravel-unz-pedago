@extends('dashboard.authBase')
@section('title')
    Connexion
@endsection
@section('content')

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Connectez vous à votre compte</p>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="icon-user"></i>
                        </span>
                    </div>
                    <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="icon-lock"></i>
                        </span>
                    </div>
                    <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="row">
                    <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">{{ __('se connecter') }}</button>
                    </div>
                    </form>
                    <div class="col-6 text-right">
                        <a href="{{ route('password.request') }}" class="btn btn-link px-0" type="button">{{ __('Mot de passe oublié?') }}</a>
                    </div>
                    </div>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Créer un compte</h2>
                  <p>Vous n'avez pas de compte ?, Créez en un facilement</p>
                  @if (Route::has('password.request'))
                    <a href="{{ route('register') }}" class="btn btn-primary active mt-3" type="button">{{ __('Créer') }}</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('javascript')

@endsection
