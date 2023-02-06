@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Tralis Pintu')

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
                <img src="{{ asset('landing/img/barang/tralispintu.jpg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Teralis adalah konstruksi besi berupa bingkai yang berfungsi sebagai pengaman sekaligus dekorasi pada pintu,
                jendela, hingga tangga. Dengan memasang teralis maka dapat menghalangi dan mempersulit maling yang ingin
                menerobos masuk ke dalam rumah. Pada awalnya teralis besi tidak dianggap penting oleh sebagian orang karena
                merasa tidak memiliki manfaat
                yang berarti. Namun sejak maraknya tidak kejahatan baik rampok dan maling yang sering diberitakan, makin
                kesini orang-orang mulai sadar akan gunanya teralis besi.
                <br><br>
                Penggunaan teralis bisa membuat rumah Anda lebih aman dan menambah kesan tersendiri karena bisa menjadi
                dekorasi pada jendela. Meski umumnya penggunaan teralis itu pada jendela namun bukan berarti tidak bisa
                diaplikasikan di tempat lain seperti pintu dan pagar.
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Fungsi dari teralis sejatinya adalah untuk menjaga keamanan rumah dari upaya maling. Karena dengan adanya
                teralis bisa membuat maling berpikir dua kali untuk masuk ke dalam rumah.
                <br><br>
                Berbeda dengan teralis jendela yang langsung ditempel pada kusennya, teralis pintu yang sedang kita bahas
                akan menempel pada frame pintu. Dengan artian, pintu rumah akan menjadi dua lapis, pintu utama dan teralis
                pintu.
                Berikut beberapa fungsi dari teralis pintu:
                <ul><br>
                <li> Keamanan </li>
                <li> Penahan Nyamuk </li>
                <li> Memperindah tampilan </li>
                </ul>
                Teralis pintu minimalis bisa menambah kesan estetik pada rumah anda karena memiliki model yang
                beragam. Teralis pintu bisa anda buat sesuai dengan keinginan. Tentu saja tak hanya keamanan tak memperindah
                rumah tetapi bisa juga mejadi penahan nyamuk jika teralis pintu dipasangkan kawat nyamuk.


            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/tralispintu2.jpg') }}" alt="" width="500"
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
                        <img class="img-fluid" src="landing/img/barang/tralispintu.jpg" alt="" />
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
