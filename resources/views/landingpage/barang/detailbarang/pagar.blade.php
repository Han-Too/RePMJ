@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Pagar')

@section('tambahan')
    <style>
        .p_120 {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .dot {
            height: 25px;
            width: 25px;
            border-radius: 50%;
            display: inline-block;
        }

        .dot-1 {
            background-color: #000;
        }

        .dot-2 {
            background-color: #afee;
        }

        .dot-3 {
            background-color: #01F;
        }

        .dot-4 {
            background-color: #EFA;
        }
    </style>

    <script></script>
@endsection

@section('content')
    <section class="portfolio_details_area p_120 bg-gray">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="card p-5 animated fadeInUp mb-5" style="border-radius: 20px">
                    <div class="row d-flex flex-row align-items-start">
                        <div class="col-md-6">

                            <div class="left_img">
                                <div id="carouselExample" class="carousel slide" style="position: relative">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid"
                                                src="{{ asset('Images/uploads/pagar') }}/{{ $pagar->foto }}"
                                                alt="">
                                        </div>
                                    </div>
                                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio_right_text ">
                                <div class="text-dark">
                                    <div class="mb-3 fs-4">{{ $pagar->judul }}</div>
                                    <div class="fs-2 ms-3 mb-3 fw-bold">Rp. {{ $pagar->harga }}
                                    </div>
                                </div>
                                <div class="text-dark">
                                    <div class="d-flex flex-row mb-1">
                                        <div class="p-2">Bahan</div>
                                        <div class="p-2">:</div>
                                        <div class="p-2">{{ $pagar->bahan }}</div>
                                    </div>
                                    <div class="d-flex flex-row mb-1">
                                        <div class="p-2">Ongkir</div>
                                        <div class="p-2">:</div>
                                        <div class="p-2 text-success fw-semibold">Gratis Ongkir Sejabodetabek</div>
                                    </div>
                                    <div class="d-grid gap-2 mx-auto mt-5">
                                        <a target="_blank" href="https://wa.link/gxxpuy" class="btn btn-success btn-block py-3"
                                            style="border-radius: 5px">Beli
                                            Sekarang</a>
                                    </div>
                                    {{-- <div class="p-2"><a href="#" class="btn btn-success btn-lg">Beli Sekarang</a></div> --}}

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="my-5 text-dark">
                        <div class="fs-5">
                            <div class=" fw-bold mb-2"> Spesifikasi Produk : </div>
                            <table class="ms-3 text-dark">
                                <tbody>
                                    <tr style="line-height: 40px">
                                        <td>Masa Garansi</td>
                                        <td> : </td>
                                        <td>1 Tahun</td>
                                    </tr>
                                    <tr style="line-height: 40px">
                                        <td>Jenis Garansi</td>
                                        <td> : </td>
                                        <td>Barang Rusak</td>
                                    </tr>
                                    <tr style="line-height: 40px">
                                        <td>Jenis Produk</td>
                                        <td> : </td>
                                        <td>{{ $pagar->jenis_produk }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" fw-bold fs-5 mt-3 mb-2"> Deskripsi Produk : </div>
                        <p>
                            {{ $pagar->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
