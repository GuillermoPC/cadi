
@extends('layouts.plantilla')

@section('title', 'Reestablecer Contraseña')



@section('content')

<section style="padding: 10% 5% 10% 5%">
    <div class="row">
        
        <div class="col-md-4 offset-md-4">
                
                <div class="login-form bg-oestemaderas mt-4 p-4 card">

                        @if (session('status'))
                            <div class="alert alert-success text-center" role="alert">
                                {{ session('status')}}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <h4>{{ __('Reestablecer Contraseña') }}</h4>

                            <hr>

                            <div class="col-12 text-center">

                                <label>{{ __('Dirección de Correo Electronico') }}</label>

                                <br>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <br>

                            <div class="col-12 text-center">
                                
                                    <button type="submit" class="btn btn-primary">

                                        {{ __('Enviar enlace para reestablecer contraseña') }}

                                    </button>
                                
                            </div>

                        </form>

            </div>
        </div>
    </div>

</section>

@endsection
