@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Pintu Henderson')

@section('tambahan')
    <style>
        .text-hover:hover {
            color: red;
        }
    </style>

    <script type="text/javascript">

    </script>
@endsection

@section('content')

    @include('landingpage.barang.header')

    <div class="container-fluid py-5 mt-2 animated fadeInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 10%;">
            <div class="col-sm-6" style="margin-right: -40px">
                <img src="{{ asset('landing/img/barang/henderson.jpg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Pintu henderson minimalis memiliki fungsi dan kegunaan hampir sama dengan pintu model lainnya, hanya
                memiliki perbedaan dari cara membuka dan menutup saja. Berbeda dengan pintu lainnya pintu henderson
                menggunakan roda pada atas dan bawah serta rel yang memanjang. Hal ini mampu meminimalisir ruangan agar
                terlihat lebih luas.
                <br><br>
                Perkembangan dalam dunia arsitek bisa dibilang cukup pesat begitu juga terhadap perkembangan model Pintu
                henderson khususnya. Pintu sliding henderson memiliki banyak pilihan model dan keamanan yang baik. Pilihan
                model yang seragam membuat anda bisa menyesuaikan dengan kebutuhan rumah atau kantor.
                <br><br>
                Untuk kekuatan, pintu geser henderson memiliki kekuatan yang sangat baik yang membuatnya akan tahan lama.
                Karena kelebihan ini pula yang membuat pintu sliding henderson menjadi laris dipasaran saat ini.
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated fadeInUp">
        <div class="row" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Harga pintu henderson sangatlah bervariatif, berbeda harga sesuai material yang dipilih. Ada tiga pilihan
                umum untuk material, dari material besi standar, material besi sedang dan material besi premium. Tentu saja
                ketiga material tersebut berbeda dari segi kualitas dan harga. Harga jual pintu henderson dari kami sudah
                termasuk jasa pemasangan jadi tak perlu lagi anda khawatir soal itu.
                <br><br>
                Jangan sampai anda mendapatkan pintu henderson tak berkualitas, anda bisa melihat dari segi kualitas yang
                diberikan. Eka jaya steel selalu memberikan material terbaik dan penawaran harga yang kompetitif. Untuk itu
                percayakan pembuatan pintu henderson kepada kami.
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/henderson2.jpg') }}" alt="" width="500"
                    style="border-radius: 3%">
            </div>

        </div>
    </div>


    <div class="container-md mx-auto overflow-hidden mt-2 mb-5 animated fadeInUp">
        <div class="h1 mb-5 text-center ">
            List Produk @yield('judul')
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($postpintu as $key => $pintuhenderson)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light overflow-hidden h-100">
                    <img class="img-fluid" src="{{ asset('Images/uploads/pintuhenderson') }}/{{ $pintuhenderson->foto }}" alt="" />
                    <div class="service-text position-relative text-center h-100 p-4">
                        <h5 class="mb-3">{{ $pintuhenderson->judul }}</h5>
                        <p>
                            {{ $pintuhenderson->deskripsi }}
                        </p>
                        <a class="small" href="/detailbaranghenderson/{{ $pintuhenderson->id }}">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
@endsection
