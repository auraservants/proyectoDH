@extends('layout')

@section('main')
<main id="login">
	<section class="container-users">
		<div class="users-background login">
			<div class="another-option another-option-web">
				<p>No tienes una cuenta?</p>
				<p>Registrate <a href="/register">acá</a></p>
			</div>
		</div>
		<div class="container-users-login">
			<div class="users-login">
                <h2 class="users-title">Iniciar sesión</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="users-form">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-items" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-items" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check remember">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>
                    </div>  
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn--orange btn--large">
                                {{ __('Iniciar sesión') }}
                            </button>

                            @if (Route::has('password.request'))
                                <p class="forget_pass">
                                    <a href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>                                    
                                </p>
                            @endif
                        </div>
                    </div>   
                </form>
                <div class="another-option another-option-movile">
                    <p>No tienes una cuenta?</p>
                    <p>Registrate <a href="signup.php">acá</a></p>
                </div>     
            </div>
        </div>	
    </section>
</main>
@endsection