

<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
                <small class="fa fa-phone me-2"></small>
                <small>+62 8138 5291 423</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center border-end px-3">
                <small class="far fa-envelope-open me-2"></small>
                <small>putramandirijayalas01@gmail.com</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center border-end px-3">
                <small class="far fa-clock me-2"></small>
                <small>Setiap Hari : 08.00 - 17.00</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0 shadow-sm">
    <a href="{{ route('/') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            {{-- <i class="fa fa-building text-primary me-3"></i>Putra Mandiri Jaya --}}
            <img src="{{ asset('landing/img/LOGO.png') }}" alt="logopmj" height="80" width="auto"> Putra Mandiri Jaya
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0 ">
            <a class="nav-item nav-link" href="{{ route('/') }}">Home</a>
            <a class="nav-item nav-link" href="{{ route('profile') }}">Profile</a>
            <a class="nav-item nav-link" href="{{ route('galeri') }}">Galeri</a>
            <a class="nav-item nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('kanopi') }}" class="dropdown-item">Canopy</a>
                    <a href="{{ route('pagarbesi') }}" class="dropdown-item">Pagar Besi</a>
                    <a href="{{ route('pintubesi') }}" class="dropdown-item">Pintu Besi</a>
                    <a href="{{ route('pintukasa') }}" class="dropdown-item">Pintu Kasa Nyamuk</a>
                    <a href="{{ route('tralisjendela') }}" class="dropdown-item">Teralis Jendela</a>
                    <a href="{{ route('tralispintu') }}" class="dropdown-item">Teralis Pintu</a>
                    <a href="{{ route('railingbalkon') }}" class="dropdown-item">Railing Balkon</a>
                    <a href="{{ route('railingtangga') }}" class="dropdown-item">Railing Tangga</a>
                    <a href="{{ route('henderson') }}" class="dropdown-item">Pintu Henderson</a>
                    <a href="{{ route('tanggaputar') }}" class="dropdown-item">Tangga Putar</a>
                    <a href="{{ route('tanggabesi') }}" class="dropdown-item">Tangga Besi</a>
                    <a href="{{ route('menaratangkiair') }}" class="dropdown-item">Menara Tangki Air</a>
                </div>
            </div>
            <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

