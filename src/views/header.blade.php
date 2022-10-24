<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Contactos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contactos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('inspire.contacts.index') }}">Listar contactos</a></li>
              <li><a class="dropdown-item" href="{{ route('inspire.contacts.create') }}">Crear Contacto</a></li>
            </ul>
          </li> --}}

          <li class="nav-item">
            <a class="nav-link" href="{{ route('inspire.contacts.index') }}">Contactos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('inspire.inspire') }}">Inspire</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>