@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
    <!-- Page Header Start -->
    {{-- <div class="container-fluid bg-navy py-4 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Kontak Kami
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
                            Kontak Kami
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->
    <div class="h1 mt-5 text-dark text-center mb-5">
        Kontak Kami
    </div>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <img class="img-fluid" src="{{ asset('landing/img/team-1.jpg') }}" alt="" />
                        </div>
                        <div class="col-sm-6">
                            <h3 class="mb-0 fs-1">Full Name</h3>
                            <p class="fs-3">Pimpinan Perusahaan</p>
                            <h6>Contact Details</h6>
                            <p class="mb-0">Call: +62 8138 5291 423</p>
                            <p class="mb-0">Email: putramandirijayalas01@gmail.com</p>
                            {{-- {!! QrCode::size(300)->generate(''.$user->name.'') !!} --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <img class="img-fluid" src="{{ asset('landing/img/team-2.jpg') }}" alt="" />
                        </div>
                        <div class="col-sm-6">
                            <h3 class="mb-0">Full Name</h3>
                            <p>Head of Marketing</p>
                            <h6>Contact Details</h6>
                            <p>
                                Lorem ipsum dolor sit amet conse elit sed eiu smod lab ore.
                            </p>
                            <p class="mb-0">Call: +012 345 6789</p>
                            <p class="mb-0">Email: sales@example.com</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!3m2!1sid!2sid!4v1674567808716!5m2!1sid!2sid!6m8!1m7!1s17eEfJ9hVoZHdjf-Jws9IA!2m2!1d-6.390046557408046!2d106.7447381550915!3f112.20445744974825!4f5.339979959036981!5f0.7820865974627469"
                            frameborder="0" style="min-height: 450px; border: 0" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Kontak Kami</h6>
                        <h1 class="display-6 mb-0">
                            Jika Anda Memiliki Pertanyaan, Hubungi Kami
                        </h1>
                    </div>
                    {{-- <p class="mb-4">
                        The contact form is currently inactive. Get a functional and
                        working contact form with Ajax & PHP in a few minutes. Just copy
                        and paste the files, add a little code and you're done.
                        <a href="https://htmlcodex.com/contact-form">Download Now</a>.
                    </p> --}}
                    <form method="post" action="{{ route('gotoWA') }}" target="_blank">
                        @csrf
                        @method('POST')
                        @if (Auth::check())
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Nama" readonly name="nama" value="{{ $user->name }}"/>
                                    <label for="subject">Nama Anda</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Alamat" name="alamat"/>
                                    <label for="subject">Alamat</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    {{-- <textarea name="pesan" class="form-control border-0 bg-light" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea> --}}
                                        <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Pesan" name="pesan"/>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success text-light py-3 px-5" type="submit">
                                    Kirim Pesan
                                </button>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Nama" name="nama"/>
                                    <label for="subject">Nama Anda</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Alamat" name="alamat"/>
                                    <label for="subject">Alamat</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    {{-- <textarea name="pesan" class="form-control border-0 bg-light" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea> --}}
                                        <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Pesan" name="pesan"/>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success text-light py-3 px-5" type="submit">
                                    Kirim Pesan
                                </button>
                                </div>
                            </div>
                        </div>
                        @endif
                        {{-- <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Nama" name="nama"/>
                                    <label for="subject">Nama Anda</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Alamat" name="alamat"/>
                                    <label for="subject">Alamat</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="subject"
                                        placeholder="Pesan" name="pesan"/>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success text-light py-3 px-5" type="submit">
                                    Kirim Pesan
                                </button>
                                </div>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
