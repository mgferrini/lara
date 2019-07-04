<header>
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">
					<a class="navbar-brand" href="{{ url('/') }}">
					<!--{{ config('app.name', 'Laravel') }}-->
						<a class="logo" href="index.php"><img src="<?PHP echo Storage::url('img/logo_hoja.png') ?>" width="150" alt="logo" ></a>
					</a>
				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								Hola {{ Auth::user()->name }} <span class="caret"></span>
								<img height="35" width="35" class="img-fluid rounded-circle" src="{{ asset('storage/avatars/' . auth()->user()->avatar) }}">
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="/perfil"><i class="navuser">{{ __('Editar Perfil') }}</i></a>
								<a class="dropdown-item" href="{{ route('logout') }}"
									 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fas fa-shopping-basket fa-md icon navcart"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>