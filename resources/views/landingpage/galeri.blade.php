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
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('Images/uploads/galeri') }}/{{ $galeri->foto }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    {{-- <h4>{{ $galeri->judul }}</h4> --}}
                                    <p>{{ $galeri->nama_produk }}</p>
                                    <a href="{{ asset('Images/uploads/galeri') }}/{{ $galeri->foto }}" title="Remodeling 1"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                    @endforeach



                </div><!-- End Projects Container -->

            </div>

        </div>
    </section>
    <!-- End Our Projects Section -->

    {{-- <section class="section border-t pb-0">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                    <h2 class=" heading mb-4">Our Latest Projects</h2>
                    <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                        the Semantics, a large language ocean.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-md-4 element-animate">
                    <a href="project-single.html" class="link-thumbnail">
                        <h3>Ducting Design in Colorado</h3>
                        <span class="ion-plus icon"></span>
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="project-single.html" class="link-thumbnail">
                        <h3>Tanks Project In California</h3>
                        <span class="ion-plus icon"></span>
                        <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="project-single.html" class="link-thumbnail">
                        <h3>Structural Design in New York</h3>
                        <span class="ion-plus icon"></span>
                        <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="project-single.html" class="link-thumbnail">
                        <h3>Stacks Design</h3>
                        <span class="ion-plus icon"></span>
                        <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="project-single.html" class="link-thumbnail">
                        <h3>Intercate Custom</h3>
                        <span class="ion-plus icon"></span>
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 element-animate">
                    <a href="project-single.html" class="link-thumbnail">
                        <h3>Banker Design</h3>
                        <span class="ion-plus icon"></span>
                        <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>
    </section> --}}
@endsection
