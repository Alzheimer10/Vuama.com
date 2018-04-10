@extends('customer.layout.auth')
@section('styles')
@stop

@section('content')
<div class="container  pt-2 pb-2" style="height: 100vh">
    <div class="row align-items-center h-100">
        <div class="col-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
            <div class="card p-5">
                <a href="{{ route('home') }}" class="mx-auto text-center"><img src="{{ asset('img/logo/logo.svg') }}" alt="logo_vuama" width="70%"></a>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group mb-0 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-form-label pb-0">Correo eléctronico</label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="correo@mail.com" autofocus="true" autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-form-label pb-0">Contraseña</label>

                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
{{-- 
                    <div class="form-group row mb-0">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group row mb-0 mt-4">
                        <div class="col-12">
                            <button type="submit" class="btn btn-app w-100 p-2 text-uppercase">
                                Entrar
                            </button>

                            <a class="btn btn-link mb-0" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                            <a class="btn btn-link float-right" href="{{ url('register') }}">
                                Registrarse
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
