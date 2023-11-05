<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="#" class="navbar-brand">
                <h1 class="text-white">SapApoteker</h1>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('beranda') }}" class="nav-item nav-link active">Beranda</a>
                    <a href="{{ route('apoteker') }}" class="nav-item nav-link">Chat Apoteker</a>
                    {{-- <a href="{{ route('artikel') }}" class="nav-item nav-link">Artikel</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="{{ route('tentangkami') }}" class="dropdown-item">Tentang Kami</a>
                            <a href="{{ route('kontak') }}" class="dropdown-item">Kontak Kami</a>
                            <a href="{{ route('kebijakanprivasi') }}" class="dropdown-item">Kebiajakan Privasi</a>
                            <a href="{{ route('syaratketentuan') }}" class="dropdown-item">Syarat & Ketentuan</a>
                        </div>
                    </div> --}}
                    <a href="/login" class="btn btn-sm btn-outline-light py-sm-2 px-sm-2 rounded-pill">Masuk
                        / Daftar</a>
                </div>
            </div>
        </nav>
    </div>
</div>
