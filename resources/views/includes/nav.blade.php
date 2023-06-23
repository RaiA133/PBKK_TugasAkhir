<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/"><b>Pesan Makanan</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title == 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{ ($title == 'Login') ? 'active' : '' }}" href="/login">Login</a>
          <a class="nav-link {{ ($title == 'Register') ? 'active' : '' }}" href="/register">Register</a>
          <a class="nav-link {{ ($title == 'Tambah Menu') ? 'active' : '' }}" href="/tambah-menu">Tambah Menu</a>
          <a class="nav-link {{ ($title == 'Profil') ? 'active' : '' }}" href="/profil">Profil</a>
        </div>
      </div>
    </div>
  </nav>