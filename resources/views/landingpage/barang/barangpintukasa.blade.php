@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Pintu Kasa Nyamuk')

@section('tambahan')
    <style>
        .text-hover:hover {
            color: red;
        }
    </style>
@endsection

@section('content')

    @include('landingpage.barang.header')

    <div class="container-fluid py-5 mt-2 animated fadeInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 10%;">
            <div class="col-sm-6" style="margin-right: -40px">
                <img src="{{ asset('landing/img/barang/pintukasa.jpg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Pintu kasa nyamuk merupakan produk yang harus dipasang pada setiap rumah karena memiliki fungsi yang
                efisien. Mulai dari mencegah nyamuk untuk masuk ke dalam rumah, lalu menghalau serangga, dan mampu menjaga
                sirkulasi udara di dalam rumah agar ruangan rumah tidak pengap.
                <br><br>
                Karena fungsinya tersebut, pintu kasa nyamuk minimalis cukup populer belakangan ini. Perkembangan banyaknya
                pengguna pintu ini semakin pesat di terapkan dirumah-rumah. Tak hanya pesat dalam pemakaian tetapi juga
                perkembangan kualitas pintu makin hari makin berkembang baik dari bahan maupun modelnya.

            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>

                Hal itu disebabkan oleh perkembangan material yang terus berubah dan makin canggih. Dulu segala macam kusen
                dan pintu menggunakan kayu sebagai materialnya, kini sudah banyak material lain yang bisa dijadikan sebagai
                pintu ataupun jendela seperti besi, aluminium, galvanis dan stainless steel.
                <br><br>
                Seiring perkembangan tersebut kini pintu kasa nyamuk tak dicari dan digunakan untuk fungsinya saja, model
                pintu dengan aksa nyamuk kian banyak dan mampu menambahkan kesan yang elegan terhadap rumah.
                Pintu kasa nyamuk merupakan produk yang harus dipasang pada setiap rumah karena memiliki fungsi yang
                efisien. Mulai dari mencegah nyamuk untuk masuk ke dalam rumah, lalu menghalau serangga, dan mampu menjaga
                sirkulasi udara di dalam rumah agar ruangan rumah tidak pengap.
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/pintukasa2.jpg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>

        </div>
    </div>

    <div class="container-md mx-auto overflow-hidden mt-2 mb-5 animated fadeInUp">
        <div class="h1 mb-5 text-center animated fadeInUp">
            List Produk @yield('judul')
        </div>
        <div class="row g-4 justify-content-center">
            @for ($i = 0; $i < 9; $i++)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="landing/img/barang/pintukasa.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pembuatan Barang</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection

@section('script')
@endsection
