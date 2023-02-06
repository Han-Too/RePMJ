@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Teralis Jendela')

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
                <img src="{{ asset('landing/img/barang/tralisjendela.jpg') }}" alt="" width="500"
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
                <br><br>
                Seiring perkembangan pengguna teralis jendela minimalis makin banyak pula bengkel las yang menjadi produsen
                pencipta berbagai model teralis. Pada akhirnya teralis dianggap sebagai penambah kesan elegan pada sudut
                jendela.
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Memasang teralis di dalam rumah punya banyak manfaatnya. Berikut ini beberapa diantaranya:
                <br>
                <ol>
                    <li> Fungsi utama teralis adalah untuk menjaga keamanan rumah. Memasang teralis akan menyulitkan orang
                        asing masuk
                        kedalam rumah melalui jendela. Pemasangan teralis dapat menjadi rintangan kecil yang membuat seorang
                        maling
                        berpikir ulang untuk masuk ke dalam rumah.
                    </li><br>
                    <li> Saat ini tersedia beragam model dan motifnya yang dapat Pins temukan di pasaran. Maka dari itu,
                        teralis
                        pun
                        dapat dijadikan sebagai elemen dekoratif di dalam rumah karena penghuni bisa menyesuaikan dengan
                        keinginan
                        dan kebutuhan mereka.
                        <br>
                        Kemudian dari segi warna pun dapat disesuaikan konsep ruangan. Misalkan jika dipakai di ruang
                        bermain
                        anak
                        bisa saja menggunakan warna cerah. Bahkan saat ini Pins bisa request sendiri motif tersebut. Jadi,
                        bisa
                        disesuaikan dengan gaya desain rumahmu.
                    </li><br>
                    <li> Terakhir, teralis juga dapat menjadi media pertukaran udara dari luar tanpa harus membuka pintu
                        atau
                        jendela.
                        Hal ini pun akan membuat ruangan dengan trellis menjadi lebih segar dan nyaman karena udara dari
                        luar
                        bisa
                        masuk dengan baik
                    </li>
                </ol>
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/tralisjendela2.jpg') }}" alt="" width="500"
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
                        <img class="img-fluid" src="landing/img/barang/tralisjendela.jpg" alt="" />
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
