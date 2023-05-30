@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
<section id="projects" class="projects mb-xl-5">
    <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">

            <div class="h1 mt-5 text-dark text-center mb-5">
                Layanan Kami
            </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="100">

                @foreach ($produk as $produk)
            {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light overflow-hidden h-100"style="max-height: 400px" >
                    <img class="img-fluid" src="{{ asset('Images/uploads/produk') }}/{{ $produk->foto }}" alt="" />
                    <div class="service-text position-relative text-center h-100 p-4">
                        <a href="/produk/detail/{{ $produk->id_produk }}" class="h5 mb-5">{{ $produk->nama_produk }}</a>
                        <p class="mt-3">
                            {{ $produk->keterangan }}
                        </p>
                        <a class="small" href="/produk/detail/{{ $produk->id_produk }}">Selengkapnya<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100" style="max-height: 400px">
                    <img src="{{ asset('Images/uploads/produk') }}/{{ $produk->foto }}" class="img-fluid" alt="">
                    <div class="portfolio-info text-center">
                        <div class="fs-2 fw-bold text-light">{{ $produk->nama_produk }}</div>
                        <p>{{ $produk->keterangan }}</p>
                        <a target="_blank" href="/produk/detail/{{ $produk->id_produk }}" title="{{ $produk->nama_produk }}"
                            data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link">
                            <i class="bi bi-cart-fill " style="margin-left: 20px"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach



            </div><!-- End Projects Container -->

        </div>

    </div>
</section>
@endsection
