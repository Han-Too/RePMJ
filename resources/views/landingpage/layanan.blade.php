@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-navy py-4 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Layanan Kami
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
                            Layanan Kami
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/kanopi1.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Canopy</h5>
                            <a href="{{ route('kanopi') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/pager2.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pagar Besi</h5>
                            <a href="{{ route('pagarbesi') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/pintubesi2.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pintu Besi</h5>
                            <a href="{{ route('pintubesi') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/pintukasa.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pintu Kasa Nyamuk</h5>
                            <a href="{{ route('pintukasa') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/tralispintu.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Teralis Pintu</h5>
                            <a href="{{ route('teralispintu') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/tralisjendela.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Teralis Jendela</h5>
                            <a href="{{ route('teralisjendela') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/railingbalkon.jpeg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Railing Balkon</h5>
                            <a href="{{ route('railingbalkon') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/railingtangga.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Railing Tangga</h5>
                            <a href="{{ route('railingtangga') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/henderson.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pintu Henderson</h5>
                            <a href="{{ route('henderson') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/tanggaputar.jpeg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Tangga Putar</h5>
                            <a href="{{ route('tanggaputar') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/tanggabesi2.jpeg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Tangga Besi</h5>
                            <a href="{{ route('tanggabesi') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/menaraair1.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Menara Tangki Air</h5>
                            <a href="{{ route('menaratangkiair') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            {{-- <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
