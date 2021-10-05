<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="{{route('home')}}">BYRONTOSH</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{menuNavegation('home')}}" href="{{route('home')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{menuNavegation('about')}}" href="{{route('about')}}">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{menuNavegation('personal')}}" href="{{route('personal')}}">Personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{menuNavegation('models')}}" href="{{route('models')}}">Modelos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{menuNavegation('contact')}}" href="{{route('contact')}}">Contáctanos</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>