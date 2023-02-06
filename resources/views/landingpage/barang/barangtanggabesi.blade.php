@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Tangga Besi')

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
                <img src="{{ asset('landing/img/barang/tanggaputar.jpeg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Tangga berfungsi sebagai penghubung atau jalur untuk akses lantai satu ke lantai lainnya serta dari satu
                bangunan ke bangunan lainnya. Meskipun sudah banyak yang menggunakan tangga di berbagai hunian, tangga putar
                besi tetap banyak menjadi pilihan.
                <br><br>
                Tangga putar bisa dibuat dengan berbagai macam material, tetapi dari dulu sampai sekarang kebanyakan
                penggunaan besi dan logam yang menjadi pilihan paling banyak digunakan. Karena mudah dalam pembuatan dan
                fungsionalitasnya. Pemasangan tangga putar juga mudah, hal-hal ini lah yang menjadi beberapa kelebihannya.
                <br><br>
                Desain dan model dari tangga putar besi minimalis sangatlah bervariasi. Mulai dari tangga klasik sampai
                tangga minimalis semua bisa dipilih menyesuaikan dengan kebutuhan dan selera.
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Kelebihan menggunakan tangga yang terbuat dari besi adalah sebagai berikut:
                <ul><br>
                    <li>Tangga besi menekankan orisinalitas desain interior atau eksterior dan dapat memberikan tampilan
                        elegan ke dalam rumah.Desain tangga besi juga makin kontemporer, bahkan memberikan kesan yang luwes.
                        Kelebihan ini bisa menjadi daya tarik tersendiri.
                    </li>
                    <li>
                        Tangga dengan material yang satu ini tergolong lebih awet daripada material jenis lain.
                        Lagi pula, material besi lebih tahan lama dan tidak membutuhkan perawatan ekstra.
                        Kamu hanya perlu mengecatnya untuk mempertahankan penampilan tangga.
                        Selain itu, yang perlu dilakukan adalah menghilangkan debu dan memeriksa kerusakan pada lapisan cat.
                    </li>
                    <li>
                        Sifat awet dan tahan lama ini karena material besi cenderung lebih kuat.
                        Material besi sangat cocok karena memiliki kekuatan lebih baik daripada jenis kayu atau beton.                        Bahkan, besi bisa bertahan sampai bertahun-tahun lamanya.                        Tangga seperti ini tidak mudah berubah bentuk dan tidak memerlukan perbaikan selama masa pakai.
                        Alhasil, kamu bisa lebih irit dalam pengeluaran.
                    </li>

                </ul>
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/tanggaputar2.jpg') }}" alt="" width="500"
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
                        <img class="img-fluid" src="landing/img/barang/tanggabesi.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Pembuatan Barang</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a href="{{ route('detailbarang') }}" class="small" href="">Selengkapnya<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection

@section('script')
@endsection
