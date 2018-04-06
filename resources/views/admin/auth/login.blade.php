@extends('admin.layout.auth')

@section('content')
    <div class="form-inner w-100">
        <div class="logo text-uppercase">
            <span><img src="{{ asset('img/blue-white.svg') }}" alt="logo_vuama"></span>
            <strong class="text-primary" style="font-size: 1rem; width: 100%;display: block">Dashboard</strong>
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
            @csrf
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="form-group-material {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" name="email" required class="input-material" value="{{ old('email') }}">
                <label for="email" class="label-material @if( !empty(old('email'))  ) active @endif">email</label>

            </div>

            <div class="form-group-material mb-2 {{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" name="password" required class="input-material">
                <label for="password" class="label-material" @if( !empty(old('password'))  ) active @endif>Password</label>
            </div>
            <div class="col-sm-12 mb-4 text-left">
                <div class="i-checks">
                    <input id="remember" type="checkbox"  {{ old('remember') ? 'checked' : '' }} class="form-control-custom">
                    <label for="remember"> Recuerdame</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary text-uppercase w-100 d-block">
                Entrar
            </button>
          <!-- This should be submit button but I replaced it with <a> for demo purposes-->
        </form>
    </div>
@endsection
