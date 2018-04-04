<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ asset('img/logo/logo.svg') }}" alt="logo_vuama" title="logo-black" height="50px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item"><a class="nav-link" href="{{ route('howWork') }}">¿Cómo funciona?</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">Ayuda</a></li>
          @if(!Auth::guard('customer')->check())
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          @else
            <li class="nav-item"><a class="nav-link" href="{{ route('customer.directory') }}">Directorio</a></li>
            <li class="nav-item"><a class="nav-link btn-solicitar" href="{{ route('customer.solicit') }}">Solicitar</a></li>
            <li class="dropdown nav-item">
              <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle nav-link">
                <img src="{{ asset(Auth::guard('customer')->user()->avatar) }}" class="rounded-circle" width="24px" height="24px"> 
                <span class="user-name">{{ Auth::guard('customer')->user()->name }} {{ Auth::guard('customer')->user()->lastname }} </span>
                <span class="angle-down s7-angle-down"></span>
              </a>
              <div role="menu" class="dropdown-menu">
                <a href="{{ route('customer.my_account') }}" class="dropdown-item">Mi Perfil</a>
                <a class="dropdown-item"  href="{{ route('logout') }}" class="dropdown-toggle"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Salir
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </li>
          @endif
        </ul>
      </div>
    </div>
</nav>