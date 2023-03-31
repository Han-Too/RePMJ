@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
    <div class="h1 mt-5 text-dark text-center mb-5">
        Layanan Kami
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @foreach ($produk as $produk)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('Images/uploads/produk') }}/{{ $produk->foto }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">{{ $produk->nama_produk }}</h5>
                            <p>
                                {{ $produk->keterangan }}
                            </p>
                            <a class="small" href="/admin/produk/detail/{{ $produk->id_produk }}">Selengkapnya<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/kanopi1.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Canopy</h5>
                            <a href="{{ route('admin.produk.kanopi.view') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
        </div>
    </div>
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/kanopi1.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Canopy</h5>
                            <a href="{{ route('admin.produk.kanopi.view') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/pager2.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pagar Besi</h5>
                            <a href="{{ route('pagarbesi') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/pintubesi2.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pintu Besi</h5>
                            <a href="{{ route('pintubesi') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/pintukasa.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pintu Kasa Nyamuk</h5>
                            <a href="{{ route('pintukasa') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/tralispintu.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Teralis Pintu</h5>
                            <a href="{{ route('teralispintu') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/tralisjendela.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Teralis Jendela</h5>
                            <a href="{{ route('teralisjendela') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/railingbalkon.jpeg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Railing Balkon</h5>
                            <a href="{{ route('railingbalkon') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/railingtangga.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Railing Tangga</h5>
                            <a href="{{ route('railingtangga') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/henderson.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pintu Henderson</h5>
                            <a href="{{ route('henderson') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/tanggaputar.jpeg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Tangga Putar</h5>
                            <a href="{{ route('tanggaputar') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/tanggabesi2.jpeg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Tangga Besi</h5>
                            <a href="{{ route('tanggabesi') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('landing/img/barang/menaraair1.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Menara Tangki Air</h5>
                            <a href="{{ route('menaratangkiair') }}" class="btn btn-success btn-lg">Selengkapnya <i class="fa fa-arrow-right ms-3"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
