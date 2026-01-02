<nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top {{ Request::segment(1) == '' ? 'bg-light' : 'bg-white shadow' }}">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('assets/icons/logo.png') }}" height="45" width="45" alt="Logo" class="me-2">
            <span class="fw-bold">LPK/LKP Prisma One</span>
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- Menu kiri -->
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profil') ? 'active fw-bold' : '' }}" href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita') ? 'active fw-bold' : '' }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Kontak</a>
                </li>

                <!-- Dropdown Gallery -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="galleryDropdown">
                        <li><a class="dropdown-item" href="/foto">Photo</a></li>
                        <li><a class="dropdown-item" href="/video">Video</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Tombol kanan -->
            <div class="d-flex justify-content-center mt-3 mt-lg-0">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger px-4">Logout</button>
                    </form>
                @else
                    <a href="/login" class="btn btn-primary px-4">Login Admin</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
