@extends('layout')

@section('main')
<main id="signup">
    <section class="container-users">
        <div class="users-background signup">
            <div class="another-option another-option-web">
                <p>Ya tienes una cuenta?</p>
                <p>Ingresá <a href="/login">acá</a></p>
            </div>
        </div>
        <div class="container-users-signup">
            <div class="users-signup">
                <h2 class="users-title">Registrarse</h2>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="users-form">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-items" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre y Apellido">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-items" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-items" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-items" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn--orange btn--large">
                                {{ __('Registrarse') }}
                            </button>
                        </div>
                    </div>
                </form>
                <div class="another-option another-option-movile">
                    <p>Ya tienes una cuenta?</p>
                    <p>Ingresá <a href="/login">acá</a></p>
                </div>                 
            </div>
        </div>
    </section>
</main>
@endsection