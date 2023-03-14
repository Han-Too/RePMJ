@extends('landingpage.index')


@extends('landingpage.landinglayout.headhtml')

@section('content')
    <!-- Page Header Start -->
    {{-- <div class="container-fluid bg-navy py-4 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Tentang Kami
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('/') }}" style="color: white;">
                            <span class="text-hover">Home &nbsp;</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <span style="color: white; ">
                            Tentang Kami
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('landing/img/LOGO.png') }}"
                            style="object-fit:contain ;" alt="Logo" >
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class=" text-start">
                            <h1 class="display-5 mb-4">Tentang Kami</h1>
                        </div>
                        <p class="mb-4 pb-2">
                            Putra Mandiri Jaya adalah penyedia jasa las murah di
                            Kota Depok dengan pelayanan terbaik. di samping dengan kualitas pelayanan terbaik, Putra Mandiri Jaya 
                            memberikan harga las termurah yang bisa di dapatkan di Kota Depok.
                            Putra Mandiri Jaya menerima berbagai permintaan seperti pembuatan pagar, pembuatan
                            canopy, pembuatan tralis, pembuatan railing, pembuatan pintu Henderson, pembuatan pintu
                            besi, dan pembuatan lainnya.</p>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">100+</h2>
                                        <p class="fw-medium mb-0">Pelanggan Puas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">100+</h2>
                                        <p class="fw-medium mb-0">Proyek Diselesaikan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Mengapa Pilih Kami?</h6>
                        <h1 class="display-6 mb-0">
                            Kelebihan dari Putra Mandiri Jaya
                        </h1>
                    </div>
                    {{-- <p class="mb-5">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p> --}}
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Terpercaya Oleh Banyak Orang dan Perusahaan</h6>
                            </div>
                            <span>Putra Mandiri Jaya telah memiliki banyak customer hingga kini dan mereka menyukai hasil
                                layanan kami</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Dikerjakan Oleh Yang Berpengalaman</h6>
                            </div>
                            <span>Putra Mandiri Jaya sudah mengerjakan proyek mulai dari tralis jendela hingga pembuatan kanopi
                                gedung</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Proyek Selesai Secara Cepat dan Tepat</h6>
                            </div>
                            <span>Sepanjang perjalanan menjalani bidang kami selalu mengerjakan proyek tepat
                                waktu demi
                                kepuasan pelanggan</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Dijamin Bergaransi</h6>
                            </div>
                            <span>Putra Mandiri Jaya memberikan garansi pekerjaan pada produk pesanan Anda. Jika ada hal
                                yang tidak sesuai dengan apa yang diinginkan segera beri tahu kami</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="landing/img/feature.jpg" alt=""
                            style="object-fit: cover" />
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white">18</h1>
                                <h2 class="text-white">Tahun</h2>
                                <h5 class="text-white mb-0">Pengalaman</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Testimoni</h6>
                        <h1 class="display-6 mb-0">Apa Pendapat Pelanggan Tentang Putra Mandiri Jaya?</h1>
                    </div>
                    {{-- <div class="row g-4">
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
                    </div> --}}
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
