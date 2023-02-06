@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Menara Tangki Air')

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
                <img src="{{ asset('landing/img/barang/menaraair1.jpg') }}" alt="" width="500" style="border-radius: 3%">
            </div>
            <div class="col-6 text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Konstruksi menara atau tower adalah sebuah bangunan, yang terbuat dari susunan beberapa rangka batang, yang
                terbuat dari material baja, serta dengan pola tertentu. Disebut menara karena konstruksi sangat tinggi.
                Bahkan letak pemasangannya, sering berada pada ketinggian. Bangunan seperti ini, ragamnya cukup banyak.
                Salah satunya adalah konstruksi menara tangki air.
                <br><br>
                Tangki atau tandon air adalah sebuah wadah penampung air, dengan daya tampung yang bermacam-macam. Serta
                berbagai macam bentuk. Antara lain bentuk tabung/silinder, kubus dan bulat. Tangki air yang terbaik untuk
                menyimpan air bersih adalah fibberglass dan stainless. Namun selain 2 jenis bahan tersebut. Tandon air yang
                terbuat dari bahan plastik juga ada. Tapi tidak tepat untuk persediaan air bersih. Sehingga jarang
                digunakan.
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5 bg-gray animated slideInUp">
        <div class="row d-flex flex-row align-items-center" style="margin-left: 15%;margin-right: 5%;">
            <div class="col-6  text-dark" style="text-align: justify">
                <h1 class="mb-5">@yield('judul')</h1>
                Tangki air mestinya ditumpu oleh sesuatu yang cukup kuat karena beban air yang besar.
                Tangki air dapat diberi dudukan khusus menggunakan menara dari besi yang dilas sedemikian rupa sehingga kuat
                untuk menyangga tangki air yang berat. Menara besi, harus sering dicat ulang agar tidak terlihat kotor
                karena karat. Atau dapat pula tangki air diletakkan di atas dak beton.
                Dak beton harus cukup kuat karena berat jenis air 1 kg/lt; setiap liter beratnya 1 kg, jadi kalau tangki air
                berkapasitas 250 liter maka beratnya juga 250 kg.Jika memakai dak beton sebagai penumpu, kamu bisa
                memanfaatkan bagian bawah dak beton sebagai ruangan.
                <br><br>
                Dengan memerhitungkan tekanan air pada keran sebesar 5 psi sampai 20 psi (pressure per sq inch), dan
                memerhatikan tinggi lantai ke lantai, tinggi water tower, dan waktu penghuni menggunakan air, maka jarak
                antara plafon dengan dasar elevated water tank adalah 2 meter.
            </div>
            <div class="col-sm-6 align-content-center">
                <img src="{{ asset('landing/img/barang/menaraair2.jpg') }}" alt="" width="500" style="border-radius: 3%">
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
                        <img class="img-fluid" src="landing/img/tralis.jpg" alt="" />
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
