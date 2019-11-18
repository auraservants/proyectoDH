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
                <form action="/signup" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="users-form">
                        <div>
                            <input class="form-items" type="text" name="name" placeholder="Nombre y Apellido" value="{{ old('name') }}">
                            <span class='error'>
                                @if($errors)                                
                                    @foreach($errors->get('name') as $error) 
                                        {{ $error }}
                                    @endforeach
                                @endif                              
                            </span> 
                        </div>
                        <div>
                            <input class="form-items" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                            <span class='error'>
                                @if($errors)                                
                                    @foreach($errors->get('email') as $error) 
                                        {{ $error }}
                                    @endforeach
                                @endif   
                            </span> 
                        </div>
                        <div>
                            <input class="form-items" type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
                            <span class='error'>
                                @if($errors)                                
                                    @foreach($errors->get('password') as $error) 
                                        {{ $error }}
                                    @endforeach
                                @endif   
                            </span>
                        </div> 
                        <div class="remember">
                            <label for="remember">Recuerdame</label>
                            <input type="checkbox" name="remember" value="remember">
                        </div>                       
                        <div>
                            <input class="btn btn--orange btn--large" type="submit" value="Enviar">
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