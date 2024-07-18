<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="#">Rental Mobil SandiArba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          @auth
            <div class="dropdown ms-md-auto">
              <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </button>
              <ul class="dropdown-menu">
              <li>
                  <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </div>
          @endauth
        </li>
      </ul>
    </div>
  </div>
</nav>