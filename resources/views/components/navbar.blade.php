
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark margin-auto">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle">

        Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <ul class="navbar-nav me-end mb-2 mb-md-0">
         <li class="nav-item">
            <a class="nav-link" href="/login">
                <button class="btn btn-outline-primary" type="/login">Login</button>
                {{-- <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"> --}}
            </a>
         </li>
         {{-- <li class="nav-item">
            <div class="dropdown text-start">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
         </li> --}}
        </ul>

      </div>
    </div>
</nav>
