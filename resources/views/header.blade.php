<header>
    <nav class="navbar navbar-expand-lg bg-light my_nav">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="fw-bold btn btn-primary" aria-current="page" href="{{ route('comics.create') }}">Aggiungi fumetti</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>