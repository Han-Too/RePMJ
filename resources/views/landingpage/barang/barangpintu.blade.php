@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Pintu Besi')

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
                <img src="{{ asset('landing/img/barang/pintubesi.jpg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Pintu besi merupakan salah satu jenis pintu yang populer, terbuat dari bahan besi dan plat dengan ketebalan
                tertentu yang bisa dipesan. Pintu besi biasa diperuntukan sebagai pintu area gudang, perkantoran, rumah
                sakit, bank dan tempat lainnya yang membutuhkan keamanan lebih. Dengan material yang kokoh, pintu besi
                memiliki kualitas keamanan yang lebih tinggi dibandingkan dengan jenis pintu lain.Keamanan yang mampu
                meminimalisir perampokan terjadi sehingga baik barang, data, berkas, atau apapun akan aman. Dengan semua
                keunggulannya pintu besi sangat cocok untuk kebutuhan setiap bangunan.
                <br><br>
                Pembuatan pintu besi menawarkan harga yang variatif berdasarkan lebar, model dan ketebalan material yang
                digunakan. Lakukan konsultasi langsung kepada kami untuk mendapatkan langkah tepat sesuai kebutuhan.
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Pintu pagar besi ini memiliki berbagai hal yang dapat membantu Anda dengan beberapa manfaat yang perlu Anda
                ketahui seperti berikut ini.
                <br><br><ol>
                <li>Meningkatkan nilai rumah Anda, pagar besi ini dapat menjadi salah satu bagian investasi yang menarik pada
                saat Anda akan menjual rumah Anda. Pintu besi yang memiliki kesan dekorasi yang indah ini dapat meningkatkan
                harga dari rumah Anda. Peningkatan harga ini juga disebabkan karena fungsi dari pagar besi rumah yang dapat
                memberikan peningkatan perlindungan dan daya tahan pemakaiannya yang lama.</li>
                    <br>
                <li>Tahan lama, pintu besi memiliki daya tahan yang lama karena terbuat dari besi. Pintu ini juga lebih kuat
                dan kokoh apabila dibandingkan dengan jenis pintu lainnya. Kelemahan besi yang dapat berkarat juga dapat
                dihilangkan dengan berbagai macam solusi yang terbaik. Karena memiliki sifat yang tahan lama dan tidak mudah
                rusak ini Anda tidak perlu mengganti-ganti pintu besi rumah Anda sehingga tidak perlu memakan biaya lagi.</li>
                    <br>
                <li>Menjaga kemanan, pintu besi yang kuat dapat memberikan tingkat keamanan yang tinggi untuk semua orang
                yang berada di dalam rumah. Pintu besi yang kuat membuat pencuri atau perampok yang akan masuk kerumah kita
                menjadi sulit karena sifatnya yang tidak mudah rusak. Hal ini dapat membuat orang-orang yang berada di dalam
                rumah menjadi lebih nyaman berada di dalamnya. Pintu besi tidak hanya mementingkan desain atau modelnya yang
                hanya untuk dilihat saja, namun pintu dengan bahan besi ini juga memiliki beberapa manfaat yang penting bagi
                setiap pemilik rumah atau bangunan lainnya. Dibandingan dengan jenis pintu lainnya yang ada sampai saat ini,
                pintu besi masih merupakan pilihan yang terbaik untuk menjaga keamanan rumah.</li>  
            </ol>
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/pintubesi2.jpg') }}" alt="" width="500"
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
                        <img class="img-fluid" src="landing/img/barang/pintubesi2.jpg" alt="" />
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
