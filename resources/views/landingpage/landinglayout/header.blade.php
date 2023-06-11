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
            <img src="{{ asset('landing/img/LOGO.png') }}" alt="logopmj" height="80" width="auto"> Putra Mandiri
            Jaya
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0 ">
            <a class="nav-item nav-link" href="{{ route('/') }}">Home</a>
            <a class="nav-item nav-link" href="{{ route('galeri') }}">Galeri</a>
            <a class="nav-item nav-link" href="{{ route('profile') }}">Tentang Kami</a>
            <a class="nav-item nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
            <a class="nav-item nav-link" href="{{ route('layanan') }}">Layanan Kami</a>
            @guest
                @if (Route::has('login'))
                    <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-item nav-link" href="{{ route('register') }}">Registrasi</a>
                @endif

                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            @else
                @if (auth()->user()->role == 'admin')
                    <a class="nav-item nav-link" href="{{ route('admin') }}">Admin Panel</a>
                    <a class="nav-item nav-link" href="{{ route('keluar') }}">Logout</a>
                    {{-- <a class="nav-item nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('keluar') }}" method="GET" class="d-none">
                        @csrf
                        @method('GET')
                    </form> --}}
                @else
                    <a class="nav-item nav-link" href="{{ route('cekpesanan') }}">Pesanan</a>
                    <a class="nav-item nav-link" href="{{ route('keluar') }}">Logout</a>
                    {{-- <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="nav-item nav-link" href="{{ route('keluar') }}">Logout</a> --}}
                    {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="{{ route('userprofile') }}">
                                Profil Saya
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
--}}
                    <form id="logout-form" action="{{ route('keluar') }}" method="GET" class="d-none">
                        @csrf
                        @method('GET')
                    </form>
            </div>
            {{-- </li> --}}
            @endif
        @endguest
    </div>
    </div>
</nav>
<!-- Navbar End -->
