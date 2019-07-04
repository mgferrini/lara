@extends('layouts.app')

@section('content')
<div class="container">
	<section class="row">
		<h1 class="regh1">Login</h1>
	</section>
	<section class="registro row">
		<article class="form regformulario col-xs-12 col-md-8 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="regtitulo">Usuario y Contraseña</h2><br>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf

						<div class="form-group row">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group row">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="form-group row">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

								<label class="form-check-label" for="remember">
									{{ __('Recordarme') }}
								</label>
							</div>
						</div>

						<div class="form-group row mb-0">
							<button type="submit" class="btn btn-primary regboton">
								{{ __('Ingresar') }}
							</button>
						</div>

						<hr>
						<div class="forgot">
							@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Si olvidaste tu clave hace click aqui') }}
							</a>
							@endif
						</div>


					</form>
				</div>
			</div>
		</article>
		<article class="form regcolumna2 col-xs-12 col-md-4 col-lg-4">
			<h2 class="regtitulo2">Acaso no estas registrado?</h2>
			<p>Registrate para estar al tanto de las ultimas novedades acerca de los productos, los nuevos productos de Phi Organic, proximos lanzamientos y un monton de cosas mas.</p>
			<br>
			<a class="btn regboton" href="/register">Registrarse</a>
		</article>
	</section>
</div>
@endsection
