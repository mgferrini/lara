@extends('layouts.app')

@section('content')
  @if(count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        {{$errors}}
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="container">
    <section class="row">
      <h1 class="regh1">Registro</h1>
    </section>
    <section class="registro row">
      <article class="regcolumna col-xs-12 col-md-4 col-lg-4">
        <h2 class="regtitulo2"> ¿Ya tenés cuenta?</h2>
        <br>
        <a class="btn regboton" href="login" role="button">Ingresar</a>
        <br><br>
        <img src="img/soapreg2.png" alt="jabon_arte" class="regimg">
      </article>
      <article class="form regformulario col-xs-12 col-md-8 col-lg-8">
        <h2 class="regtitulo">Ingresa tus datos para registrarte </h2><br>
        <form method="POST" action="{{ route('register') }}" class="datosusuario" enctype= "multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nombre</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="last_name">Apellido</label>
              <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
              @error('last_name')
              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="email">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value=" {{ old('email') }}" required autocomplete="email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Reconfirmar Contraseña</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
            </div>
          </div>
          <div class="regSubirAvatar"> Imagen de Perfil:
            <input type="file" name="avatar" id="avatar" value=" {{ old('avatar') }}">
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="terminos" name="terminos" checked=true >
              <label class="form-check-label" for="terminos">
                He leído y acepto Términos y Condiciones
              </label>
            </div>
          </div>
          <button type="submit" class="btn regboton">Enviar</button>
        </form>
      </article>
    </section>

    {{--<div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>--}}
  </div>
@endsection
