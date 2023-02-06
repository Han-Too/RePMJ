@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Railing Tangga')

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
                <img src="{{ asset('landing/img/barang/railingtangga.jpg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Pagar tangga atau biasa disebut pegangan tangga atau railing tangga, berfungsi untuk mencegah Anda terjatuh
                pada saat naik atau menuruni tangga. Selain untuk menjaga agar penghuni rumah aman dan nyaman, pemasangan
                pegangan tangga pada sisi tangga dapat menghadirkan kesan dan gaya tersendiri pada sebuah ruang.
                <br><br>
                Apapun dekorasi ruang rumah Anda, kontemporer, tradisional, modern atau minimalis, banyak sekali model dan
                desain pagar tangga yang dapat mengangkat elemen arsitektur rumah. Ada banyak railing tangga minimalis,
                mulai dari desain pagar tangga kaca, pagar tangga kayu, pagar tangga minimalis, pagar tangga kawat
                kontemporer dengan kisaran harga yang beragam pula.
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Yak, selain untuk dekorasi pada tangga rumah manfaat dari railing tangga juga sebagai pelindung. Railing
                tangga biasanya dipasang sejajar dengan tangga di bagian kanan dan kiri untuk pelindung tubuh agar tidak
                terjatuh. Seperti fungsi dari railing balkon fungsi utama nya adalah pengaman bagi penghuni rumah. 
                <br>
                Berikut manfaat dari railing tangga besi minimalis:
                <ul><br>
                <li> Sebagai media pengaman </li>
                <li> Penambah ornamen dan dekorasi </li>
                <li> Kelengkapan bagian rumah </li>
                </ul><br>
                Railing tangga adalah kerajinan besi yang bisa dipadukan dengan material lain. Memang, railing tangga
                identik dengan besi namun ternyata banyak tipe railing tangga yang menggunakan material lainnya seperti
                kayu, besi hollow, stainless dan kaca.
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/railingtangga2.jpg') }}" alt="" width="500"
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
                        <img class="img-fluid" src="landing/img/barang/railingtangga.jpg" alt="" />
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
