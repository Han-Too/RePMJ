@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('tambahan')
    <style>

    </style>
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($jumbotron as $key => $jumbo)
                    <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>  ">
                        <img class="w-100" src="{{ asset('Images/uploads/jumbotron') }}/{{ $jumbo->foto }}"
                            alt="{{ $jumbo->judul }}" />
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10">
                                        <h1 class="display-2 text-light mb-3 animated slideInDown">
                                            Putra Mandiri Jaya
                                        </h1>
                                        <div class="fs-4"> Dikerjakan Oleh Profesional Dibidangnya </div><br>
                                        {{-- <a href="" class="btn btn-primary py-3 px-5">Selengkapnya</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="carousel-item">
                    <img class="w-100" src="landing/img/las2.png" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                                        Putra Mandiri Jaya
                                    </h1>
                                    <div class="fs-4"> Dikerjakan Oleh Profesional Dibidangnya </div><br>
                                    <a href="" class="btn btn-primary py-3 px-5">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden  h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="{{ asset('landing/img/LOGO.png') }}" alt="PMJ"
                            style="object-fit:contain" />
                        {{-- <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white">18+</h1>
                                <h2 class="text-white">Tahun</h2>
                                <h5 class="text-white mb-0">Pengalaman</h5>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">Sekilas Tentang</h6>
                            <h1 class="display-6 mb-0">
                                Putra Mandiri Jaya
                            </h1>
                        </div>
                        <p>
                            Putra Mandiri Jaya adalah bengkel las terdekat yang bisa didapatkan di wilayah Anda. Kami
                            mengerjakan berbagai macam kebutuhan rumah, gedung, kantor, apartemen, dan fasilitas umum
                            lainnya. Untuk pengalaman, Anda tak perlu ragu lagi karena sudah belasan tahun kami berjalan
                            dalam bidang bengkel las.
                        </p>
                        <p class="mb-4">
                            Tukang las kami mampu mengerjakan pesanan custom serta menerima jasa perbaikan dan servis. Bahan
                            besi yang kami gunakan merupakan besi terbaik di kelasnya sehingga semua pekerjaan akan
                            menghasilkan produk yang rapih. </p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row g-4">
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Harga Murah & Berkualitas</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Memiliki Garansi</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Dikerjakan Oleh Profesional</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
        <div class="row g-0">
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="landing/img/fact-1.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">01</h1>
                        <h4 class="text-white mb-3">Construction</h4>
                        <p class="text-white">
                            Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="landing/img/fact-2.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">Mechanical</h4>
                        <p class="text-white">
                            Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="landing/img/fact-3.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">Architecture</h4>
                        <p class="text-white">
                            Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="landing/img/fact-4.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">04</h1>
                        <h4 class="text-white mb-3">Interior Design</h4>
                        <p class="text-white">
                            Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Putra Mandiri Jaya</h6>
                        <h1 class="display-6 mb-0">
                            Daftar Layanan
                        </h1>
                    </div>
                </div>
                {{-- <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary py-3 px-5" href="">Selengkapnya</a>
                </div> --}}
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="landing/img/service-1.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pembuatan Barang</h5>
                            <p>
                                Kami Melayani Pembuatan Barang Besar maupun Kecil
                            </p>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="landing/img/service-2.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Renovasi Rumah</h5>
                            <p>
                                Kami Dapat Melayani Untuk Merenovasi Rumah Anda
                            </p>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="landing/img/service-3.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Perbaikan Barang</h5>
                            <p>
                                Anda Punya Barang Rusak? Kami Dapat Perbaiki Barang Tersebut
                            </p>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="landing/img/service-4.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pemasangan Alat Rumah</h5>
                            <p>
                                Anda Tidak Paham Memasang Suatu Alat? Serahkan Kepada Kami untuk Memasangkannya
                            </p>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="landing/img/service-5.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pengecatan Ulang Barang</h5>
                            <p>
                                Barang Anda Sudah Kusam? Kami Dapat Memperbarui Warna Barang Tersebut
                            </p>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="landing/img/service-6.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Konsultasi Barang</h5>
                            <p>
                                Anda Ingin Membeli Barang, Namun Tidak Tahu Jenisnya? Tanyakan Pada Kami
                            </p>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div class="container-fluid bg-gray my-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 ">
                <div class="col-lg-7 col-md-6 wow fadeIn align-items-center" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-dark text-uppercase mb-2">Promo</h6>
                        <h1 class="display-6 text-dark mb-0">
                            DAPATKAN HARGA PROMO DAN DISKON PADA BULAN INI!
                        </h1>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeIn align-items-center" data-wow-delay="0.5s">
                    <a target="_blank" href="https://wa.me/+6281385291423?text=Permisi%20Pak,%20Saya%20Ingin%20Menanyakan%20Sesuatu" class="btn btn-success py-5 w-100 fw-bolder fs-2"
                        style="border-radius: 200px">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        {{-- <h6 class="text-body text-uppercase mb-2">Tim Kami</h6> --}}
                        <h1 class="display-6 mb-0">Tim Kami</h1>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-0">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p>
                </div> --}}
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="landing/img/team-1.jpg" alt="" />
                        <div class="team-text bg-white p-4">
                            <h5>Full Name</h5>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="landing/img/team-2.jpg" alt="" />
                        <div class="team-text bg-white p-4">
                            <h5>Full Name</h5>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="landing/img/team-3.jpg" alt="" />
                        <div class="team-text bg-white p-4">
                            <h5>Full Name</h5>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Testimoni</h6>
                        <h1 class="display-6 mb-0">Apa Pendapat Pelanggan Tentang Putra Mandiri Jaya?</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">100+</h1>
                            </div>
                            <h5 class="mb-0">Pelanggan Puas</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">100+</h1>
                            </div>
                            <h5 class="mb-0">Proyek Selesai</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid mb-4" src="{{ asset('landing/img/testimonial-2.jpg') }}"
                                    alt="" />
                                <p class="fs-5">
                                    Bagus, Pekerjaan Baik dan Rapih ditambah Waktu penyelesaian tepat waktu
                                </p>
                                <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                                <h5>Agus</h5>
                                <span>Orang Sawah</span>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid mb-4" src="{{ asset('landing/img/testimonial-2.jpg') }}"
                                    alt="" />
                                <p class="fs-5">
                                    Bagus, Pekerjaan Baik dan Rapih ditambah Waktu penyelesaian tepat waktu
                                </p>
                                <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                                <h5>Agus</h5>
                                <span>Orang Sawah</span>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid mb-4" src="{{ asset('landing/img/testimonial-2.jpg') }}"
                                    alt="" />
                                <p class="fs-5">
                                    Bagus, Pekerjaan Baik dan Rapih ditambah Waktu penyelesaian tepat waktu
                                </p>
                                <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                                <h5>Agus</h5>
                                <span>Orang Sawah</span>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

@section('script')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
