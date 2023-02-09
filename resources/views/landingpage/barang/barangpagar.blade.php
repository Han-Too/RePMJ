@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Pagar Besi')

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
                <img src="{{ asset('landing/img/barang/pagar1.jpg') }}" alt="" width="500" style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Material pagar besi dianggap tahan lama dan hemat biaya namun tidak selalu dekoratif. Dalam beberapa tahun
                terakhir, besi telah sering digunakan dalam desain desain pagar rumah kontemporer sebagai bagian dari
                struktur dan ornamen. Bahan ini adalah pelengkap yang sempurna untuk arsitektur rumah modern, karena
                memiliki finishing yang bersih dan sederhana.
                <br><br>
                Bahkan sentuhan warna karat dari pagar rumah besi memberikan nuansa yang lebih alami,jika memang 
                ingin pagar rumah lebih tahan lama, cara menghilangkan karat pada besi dengan alat penghilat karat bisa
                dijadikan salah satu solusinya.
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class = "row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Pagar besi dapat bertahan seiring berjalannya waktu. Tidak peduli waktu, gaya populer yang berubah setiap
                waktu, pagar besi tetap berdiri kokoh di sekeliling lahan . Selain itu,  bisa mendapatkan banyak
                karakter dari hal-hal detail dengan material pagar besi untuk menambahkan sentuhan modern, tanpa
                mengorbankan desain klasik dan abadi yang begitu populer pada zamannya. Jadi jika  tidak tertarik untuk
                mengejar tren terbaru secara teratur, namun hanya ingin menonjolkan tampilan secara estetis, desain pagar
                besi merupakan pilihan tepat.
                <br><br>
                Tidak ada alternatif material pagar lainnya yang dapat menawarkan ketahanan yang hebat selain pagar besi.
                Hal ini menjadikan besi sebagai pilihan yang sangat cerdas untuk material pagar modern yang berpotensi tahan
                cuaca, seperti di sekitar area pertanian yang luas atau di daerah dengan cuaca ekstrem. Ini juga berarti
                jika  tetap merawat pagar besi, maka material ini bahkan sanggup tahan lebih lama.
                <br><br>
                Material pagar besi nyaris tidak dapat dirusak dan mudah dirancang untuk memiliki pengaman langsung terhadap
                kemungkinan dipanjat oleh para penyusup. Pagar kayu bahkan tidak bisa memberikan tingkat kekokohan yang
                sebanding atau bahkan tidak mudah menghalangi orang untuk memanjatnya. Tentu saja, itu berarti bahwa 
                harus menambahkan profil dan sudut tajam pada desain pagar besi , tetapi justru detail pengaman itu
                memiliki pesona tersendiri.
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/pager2.jpg') }}" alt="" width="500" style="border-radius: 3%">
            </div>

        </div>
    </div>

    <div class="container-md mx-auto overflow-hidden mt-2 mb-5 animated fadeInUp">
        <div class="h1 mb-5 text-center animated fadeInUp">
            List Produk @yield('judul')
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($pagar as $key => $pagar)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('Images/uploads/pagar') }}/{{ $pagar->foto }}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">{{ $pagar->judul }}</h5>
                            <p>
                                {{ $pagar->deskripsi }}
                            </p>
                            <a class="small" href="/detailbarangpagar/{{ $pagar->id }}">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
@endsection
