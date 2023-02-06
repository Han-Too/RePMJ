@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Canopy')

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
                <img src="{{ asset('landing/img/barang/kanopi1.jpg') }}" alt="" width="500" style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-4">@yield('judul')</h1>
                Kanopi merupakan suatu media penghalang cuaca demi melindungi barang-barang berharga yang berada diluar
                ruangan atau dihalaman rumah anda. kanopi digunakan dalam arsitektur saat ini merupakan sejenis atap untuk
                melindungi bagian luar rumah dari panas matahari dan terpaan hujan. <br>
                Secara umum kanopi punya 2 fungsi :
                <ol>
                    <li>
                        Fungsi yang pertama, yakni sebagai pelindung menyangkut fungsi-fungsi fisik seperti dapat melindungi
                        teras
                        rumah dari terpaan air hujan ataupun panasnya sinar matahari. Penggunaan kanopi akan banyak membantu
                        Sahabat
                        untuk tidak lagi capek capek harus mengepel ketika hujan turun.
                    </li>
                    <li>
                        Fungsi yang kedua, yakni sebagai dekorasi yang mempercantik tampilan rumah berkaitan dengan fungsi
                        non fisik atau estetika. Pilihlah desain kanopi yang memang menggambarkan ciri khas dari rumah
                        Sahabat.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-4">@yield('judul')</h1>
                Kanopi dalam perkembangannya kini marak digunakan pada bagian garasi mobil dan balkon rumah, kantor dan
                bangunan lainnya. Karena kanopi juga dapat memberikan nuansa yang teduh dan tidak terasa panas yang juga
                berimbas pada ruangan lainnya baik didalam rumah, kantor, rumah sakit, cafe dan sebagainya. selain itu
                Kanopi kini banyak digunakan untuk lahan parkir mobil di pinggir jalan dan juga banyak digunakan pada setiap
                halte-halte bus.
                <br><br>
                Kehadiran kanopi selain untuk fungsi melindungi, juga menjadi bagian tak terpisahkan dari keindahan desain
                sebuah bangunan. Dan kini beragam model dan jenis kanopi sudah bisa ditemukan. Oleh karena itu bahan pembuat
                kanopi pun mulai bervariasi, sehingga mudah dipilih sesuai selera dan kebutuhan seperti bahan genting, bahan
                sirap (kayu), vinil, polikarbonat, kain, plastik, dak beton, seng, dan fiber semen.
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/kanopi2.jpg') }}" alt="" width="500" style="border-radius: 3%">
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
                        <img class="img-fluid" src="{{ asset('landing/img/barang/kanopi1.jpg') }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pembuatan Barang</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href="{{ route('detailbarang') }}">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection

@section('script')
@endsection
