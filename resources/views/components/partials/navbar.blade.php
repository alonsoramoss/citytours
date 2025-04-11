<nav class="navbar navbar-expand-lg bg-primary shadow sticky-top">
  <div class="container">
    <div style="position: relative">
      <a class="nav-link" href="/users">
        <span class="navbar-brand fs-3 m-0 text-light fw-bold">CITY TOURS</span>
        <span class="navbar-brand text-light fs-6">usuarios</span>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUser" 
            aria-controls="navbarUser" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarUser">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-3">
          <a class="nav-link active text-light fs-5" href="{{ url('/home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <form action="logout" method="POST">
            @csrf
            <a href="#" onclick="this.closest('form').submit()" class="nav-link active text-light fs-5">
            Cerrar sesión</a>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
