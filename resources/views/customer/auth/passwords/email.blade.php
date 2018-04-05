@extends('customer.layout.auth')
@section('styles')
@stop
<!-- Main Content -->
@section('content')
<div class="container pt-2 pb-2" style="height: 100vh">
    <div class="row align-items-center h-100">
        <div class="col-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
            <div class="card p-5">
                <a href="{{ route('home') }}" class="mx-auto text-center"><img src="{{ asset('img/logo/logo.svg') }}" alt="logo_vuama" width="70%"></a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Correo eléctronico</label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo@mail.com">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-app w-100 p-2 text-uppercase">
                            Restablecer contraseña 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
