@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects mb-xl-5">
        <div class="container" data-aos="fade-up">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <div class="h1 mt-5 text-dark text-center mb-5">
                    Galeri Pekerjaan
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    @foreach ($galeri as $key => $galeri)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100" style="max-height: 400px">
                                <img src="{{ asset('Images/uploads/galeri') }}/{{ $galeri->foto }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <p>{{ $galeri->nama_produk }}</p>
                                    <a target="_blank" href="{{ asset('Images/uploads/galeri') }}/{{ $galeri->foto }}"
                                        title="{{ $galeri->nama_produk }}" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link">
                                        <i class="bi bi-zoom-in " style="margin-left: 20px"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                    @endforeach
                    


                </div><!-- End Projects Container -->
            </div>

        </div>
    </section>
    <!-- End Our Projects Section -->
@endsection
