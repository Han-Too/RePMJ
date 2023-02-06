@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Railing Balkon')

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
                <img src="{{ asset('landing/img/barang/railingbalkon.jpeg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Railing balkon adalah komponen penting untuk dipasangkan pada rumah bertingkat banyak keuntungan dengan
                memasang produk ini. Railing balkon memiliki fungsi sebagai pengaman pinggiran balkon sehingga keamanan
                balkon meningkat. Jadi dengan pemasangan railing pada balkon bisa membuat tenang kita sebagai penghuni.
                Dengan adanya pembatas pada balkon tentu kenyamanan juga bertambah.
                <br><br>
                Untuk desain, banyak pilihan desain yang bisa di sesuaikan dengan kebutuhan baik dari selera, dan aktivitas
                yang akan dilakukan pada balkon. Anda sangat bisa membuat railing balkon sesuai dengan tema rumah agar
                terlihat estetik. Namun tetap keamanan adalah yang utama serta pemeliharaan yang mudah juga menjadi nilai
                lebih bagi railing.

            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Selain harus aman dari segi keselamatan, desain railing balkon yang baik juga harus memikirkan fitur privasi
                dan akses pemandangan yang ideal. Tak jarang, desain railing balkon akan menentukan eksterior rumah. Lebih
                selektif dan mempertimbangkan desain railing balkon yang paling indah menjadi kewajiban. Mulai dari aspek
                bahan, desain dan fitur, banyak sekali yang bisa kamu dapatkan dari railing balkon yang diinstalasi dengan
                baik.
                <br><br>
                Material untuk membuat railing balkon pun banyak pilihan mulai dari besi, logam, kayu, kaca, stainless
                steel, aluminium dan lainnya. Namun bersama Eka Jaya Steel anda bisa mendapatkan railing balkon besi dengan
                kualitas besi terbaik dan model sesuai kebutuhan.
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/railingbalkon2.jpg') }}" alt="" width="500"
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
                        <img class="img-fluid" src="landing/img/barang/railingbalkon.jpeg" alt="" />
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
