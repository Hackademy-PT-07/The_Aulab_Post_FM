<span>
    <a class="" href="{{ route('home') }}">Home</a>
    <a class="" href="{{ route('articles') }}">Articoli</a>
    <a class="" href="{{ route('contatti') }}">Contatti</a>
    <a class="" href="{{ route('chisono') }}">Chi sono</a>
    <a href="">
    @auth
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn">Esci</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        @else
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrati</a>
          </li>
        </ul>
        @endauth
    </a>
         
</span>