@extends('customer.layout.auth')
@section('styles')
@stop
@section('content')
<div class="container pt-2 pb-2">
    <div class="row align-items-center h-100">
        <div class="col-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
            <div class="card p-5">
                <a href="{{ route('home') }}" class="mx-auto text-center"><img src="{{ asset('img/logo/logo.svg') }}" alt="logo_vuama" width="70%"></a>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Nombre</label>

                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required="true" autofocus placeholder="Nombre">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <label for="lastname" class="control-label">Apellido</label>

                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required="true" placeholder="Apellido">

                        @if ($errors->has('lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Correo eléctronico</label>

                        <input id="email" type="email" class="form-control" name="email" placeholder="correo@mail.com" required="true" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Contraseña</label>

                        <input id="password" type="password" class="form-control" required="true" name="password" placeholder="Contraseña">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="control-label">Confirmar contraseña</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group row mb-0 mt-4">
                        <div class="col">
                            <button type="submit" class="btn btn-app d-block w-100 p-3">
                                COMENZAR!
                            </button>
                            <a class="btn btn-link" href="{{ url('login') }}">
                                Poseo una cuenta
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="login-or text-center d-bock w-100">
                          <hr class="hr-or">
                          <span class="span-or">o</span>
                        </div>

                        <div class="form-group col-6 mb-0">
                            <button class="btn btn-primary b-block w-100"><i class="fab fa-facebook"></i> <span> Facebook </span></button>
                        </div>
                        <div class="form-group col-6 mb-0">
                            <button class="btn btn-danger b-block w-100"><i class="fab fa-google"></i> <span> google </span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
