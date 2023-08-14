  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-0">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="img/logo.png" alt="Bootstrap" height="80">
      </a>
      <button class="navbar-toggler shadow-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <a class="offcanvas-title" id="offcanvasNavbarLabel" href="{{url('/')}}">
            <img src="img/logo.png" alt="Bootstrap" height="80">
          </a>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}">Beranda</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link {{ Request::is('buku') ? 'active' : '' }}" href="{{url('buku')}}">Buku</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link {{ Request::is('katalog') ? 'active' : '' }}" href="{{url('katalog')}}">Katalog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="tentang-kami" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tentang Kami
              </a>
              <ul class="dropdown-menu" aria-labelledby="tentang-kami">
                <li><a class="dropdown-item {{ Request::is('company-profile') ? 'active' : '' }}" href="{{url('company-profile')}}">Company Profile</a></li>
                <li><a class="dropdown-item {{ Request::is('portofolio') ? 'active' : '' }}" href="{{url('portofolio')}}">Portofolio</a></li>
                <li><a class="dropdown-item {{ Request::is('marketplace') ? 'active' : '' }}" href="{{url('marketplace')}}">Marketplace</a></li>
                <li><a class="dropdown-item" href="#">Galeri</a></li>
                <li><a class="dropdown-item" href="#">Sertifikasi / Penghargaan</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('lowongan-pekerjaan') ? 'active' : '' }}" href="{{url('lowongan-pekerjaan')}}">Lowongan Pekerjaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="{{url('kontak')}}">Kontak</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="layanan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Layanan
              </a>
              <ul class="dropdown-menu" aria-labelledby="layanan">
                <li><a class="dropdown-item" href="#">Perangkat Pembelajaran</a></li>
                <li><a class="dropdown-item" href="#">Alur Pembayaran</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <button class="btn btn-outline-primary me-2" type="submit"><i class="bi bi-search"></i></button>
            <input class="form-control" type="search" placeholder="Pencarian" aria-label="Search">
          </form>
        </div>
      </div>
    </div>
  </nav>