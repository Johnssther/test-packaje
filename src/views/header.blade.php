<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Contactos</a>
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
            <a class="nav-link text-white" href="{{ route('inspire.contacts.index') }}">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark btn btn-sm bg-1 m-1" href="{{ route('inspire.contacts.index', ['filter_alert' => 1]) }}">sin prioridad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark btn btn-sm bg-2 m-1" href="{{ route('inspire.contacts.index', ['filter_alert' => 2]) }}">normal </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark btn btn-sm bg-3 m-1" href="{{ route('inspire.contacts.index', ['filter_alert' => 3]) }}">en cuenta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark btn btn-sm bg-4 m-1" href="{{ route('inspire.contacts.index', ['filter_alert' => 4]) }}">Proximo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark btn btn-sm bg-5 m-1" href="{{ route('inspire.contacts.index', ['filter_alert' => 5]) }}">Urgente</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('inspire.inspire') }}">Inspire</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>