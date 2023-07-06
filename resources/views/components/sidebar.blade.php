<nav class="navbar shadow-sm bg-white fixed-top">
    <div class="container-fluid d-flex">
      <div class="d-flex">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ps-4 d-none d-md-inline" href="#">Hotel Ébano</a>
      </div>
      <div class="d-flex dropdown me-2 me-sm-3">
        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
            class="bi bi-person-circle d-none d-md-inline me-2" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
          <div class="d-flex flex-column px-2">
            <span>{{ Auth::user()->nombre ?? ''}}</span>
            <small class="fst-italic text-muted">{{ Auth::user()->Rol->nombre ?? '' }}</small>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Acción</a></li>
          <li><a class="dropdown-item" href="#">Otra acción</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <a href="#" onclick="this.closest('form').submit()" class="dropdown-item" >Cerrar Sesión</a>
            </form>
          </li>
        </ul>
      </div>
      <div class="offcanvas offcanvas-start" style="max-width: 230px !important" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hotel Ébano</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Gestionar Usuarios
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('propietarios.index') }}">Propietarios</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">Usuarios</a></li>
                <li><a class="dropdown-item" href="{{ route('roles.index') }}">Roles y Privilegios</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('personal.index') }}">Personal</a></li>
                <li><a class="dropdown-item" href="{{ route('cargos.index') }}">Cargos</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Gestionar Compras
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Proveedores</a></li>
                <li><a class="dropdown-item" href="#">Notas de Compras</a></li>
                <li><a class="dropdown-item" href="#">Compras de Ingred.</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Servicio Técnico</a></li>
                <li><a class="dropdown-item" href="#">Notas de servicio</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Gestionar Inventario
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Muebles</a></li>
                <li><a class="dropdown-item" href="#">Categorías</a></li>
                <li><a class="dropdown-item" href="#">Marcas</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Notas de Salida</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Gestionar Menu
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Menu</a></li>
                <li><a class="dropdown-item" href="#">Platillos</a></li>
                <li><a class="dropdown-item" href="#">Ingredientes</a></li>
                <li><a class="dropdown-item" href="#">Unidades</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Gestionar Rentas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Hoteles</a></li>
                <li><a class="dropdown-item" href="#">Habitaciones</a></li>
                <li><a class="dropdown-item" href="#">Tipos de Habitación</a></li>
                <li><a class="dropdown-item" href="#">Conjuntos</a></li>
                <li><a class="dropdown-item" href="#">Areas Comunes</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Huespedes</a></li>
                <li><a class="dropdown-item" href="#">Notas de Alquiler</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>