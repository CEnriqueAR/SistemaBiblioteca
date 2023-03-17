
<header class="p-3 bg-dark text-white">

  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <img src="{{ asset('img/ido.png')}}" width="70px" height="70px">
            </a>
        </h1>      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">
                 <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>Inicio</a></li>
          <li><a href="{{ route('libro.index') }}" class="nav-link px-2 text-white">
                 <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>Libros</a></li>
          @auth
              @if(@Auth::user()->hasRole('admin')or('Bibliotecaria'))

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg xmlns="http://www.wf3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>

                    </span>
                  <span class="nav-link-title">
                      Usuario
                    </span>
              </a>

              <div class="dropdown-menu">
                  <a href="{{ route('users.index') }}" class="dropdown-item">Users</a>
                  <a href="{{ route('roles.index') }}" class="dropdown-item">Roles</a>
                  <a href="{{ route('area.index') }}" class="dropdown-item">Area</a>
                  <a href="{{ route('categoria.index') }}" class="dropdownpdown-item">Categoria</a>
                  <a href="{{ route('curso.index') }}" class="dropdown-item">Curso</a>
                  <a href="{{ route('permissions.index') }}" class="dropdown-item">Permisos</a>
              </div>

          </li>
          @endauth

          @endif
      </ul>
      <div class="nav-item dropdown">
                @auth
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                        <span class="avatar avatar-sm" style="background-image: url(public/static/avatars/000m.jpg)"></span>

                        <div class="d-none d-xl-block ps-2">
                            <div>
                                {{auth()->user()->name}}&nbsp;
                                <div class="text-end">
                                </div>

                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="#" class="dropdown-item">Set status</a>
                        <a href="#" class="dropdown-item">Profile & account</a>
                        <a href="#" class="dropdown-item">Feedback</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="{{ route('logout.perform') }}" class="dropdown-item">Logout</a>
                    </div>
            </div>
            @endauth
        </div>



    </div>

  </div>
    <div>
        @guest
            <div class="text-end">
                <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
            </div>
        @endguest
    </div>
</header>





