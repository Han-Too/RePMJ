@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-navy py-4 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Galeri
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('/') }}" style="color: white;">
                            <span class="text-hover">Home &nbsp;</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <span  style="color: white; ">
                            Galeri
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Services</h6>
                        <h1 class="display-6 mb-0">
                            Construction And Renovation Solutions
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary py-3 px-5" href="">More Services</a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-1.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Building Construction</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-2.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Home Maintainance</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-3.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Renovation and Painting</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-4.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Wiring and installation</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-5.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Tiling and Painting</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-6.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Interior Design</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Appointment</h6>
                        <h1 class="display-6 mb-0">
                            A Company Involved In Service And Maintenance
                        </h1>
                    </div>
                    <p class="mb-0">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="gname"
                                        placeholder="Gurdian Name" />
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="gmail"
                                        placeholder="Gurdian Email" />
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="cname"
                                        placeholder="Child Name" />
                                    <label for="cname">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="cage"
                                        placeholder="Child Age" />
                                    <label for="cage">Service Type</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Get Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <div class="h1 text-dark text-center mb-5">
                    Galeri Pekerjaan
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    @for ($i = 0; $i < 12; $i++)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('landing/img/las2.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Remodeling 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('landing/img/las2.png') }}" title="Remodeling 1"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                    @endfor



                </div><!-- End Projects Container -->

            </div>

        </div>
    </section>
    <!-- End Our Projects Section -->

    <section class="section border-t pb-0">
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
    </section>
@endsection
