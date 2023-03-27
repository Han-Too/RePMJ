@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('judul', 'Teralis Jendela')

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
<div class="modal fade" id="modal_nonlogin" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pembelian</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('buykanopi') }}">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="user" class="col-form-label">User :</label>
                        <input type="text" required class="form-control" id="user" name="user">
                        <input type="hidden" class="form-control" name="harga" value="{{ $teralisjendela->harga }}">
                        <input type="hidden" class="form-control" name="bahan" value="{{ $teralisjendela->bahan }}">
                        <input type="hidden" class="form-control" name="nama" value="{{ $teralisjendela->judul }}">
                    </div>
                    <div class="mb-3">
                        <label for="luas" class="col-form-label">Luas :</label>
                        <input type="number" required class="form-control" id="luas" name="luas">
                    </div>
                    <div class="mb-3">
                        <label for="Keterangan" class="col-form-label">Keterangan :</label>
                        <textarea class="form-control" required id="Keterangan" name="keterangan"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Buat Pesanan</button>
            </div>
        </div>
    </div>
    <!--end::Modal dialog-->
</div>
@if (auth()->check())
<div class="modal fade" id="modal_login" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pembelian</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('buyteralisjendela') }}">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="user" class="col-form-label">User :</label>
                        <input type="text" readonly class="form-control" id="user" name="user"
                            value="{{ $user->name }}">   
                        <input type="hidden" class="form-control" name="harga" value="{{ $teralisjendela->harga }}">
                        <input type="hidden" class="form-control" name="bahan" value="{{ $teralisjendela->bahan }}">
                        <input type="hidden" class="form-control" name="nama" value="{{ $teralisjendela->judul }}">
                    </div>
                    <div class="mb-3">
                        <label for="luas" class="col-form-label">Luas :</label>
                        <input type="number" required class="form-control" id="luas" name="luas">
                    </div>
                    <div class="mb-3">
                        <label for="Keterangan" class="col-form-label">Keterangan :</label>
                        <textarea class="form-control" required id="Keterangan" name="keterangan"></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Buat Pesanan</button>
            </div>
            </form>
        </div>
    </div>
    <!--end::Modal dialog-->
</div>
@endif
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
                                                src="{{ asset('Images/uploads/teralisjendela') }}/{{ $teralisjendela->foto }}"
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
                                    <div class="mb-3 fs-4">{{ $teralisjendela->judul }}</div>
                                    <div class="fs-2 ms-3 mb-3 fw-bold">Rp. {{ $teralisjendela->harga }}
                                    </div>
                                </div>
                                <div class="text-dark">
                                    <div class="d-flex flex-row mb-1">
                                        <div class="p-2">Bahan</div>
                                        <div class="p-2">:</div>
                                        <div class="p-2">{{ $teralisjendela->bahan }}</div>
                                    </div>
                                    <div class="d-flex flex-row mb-1">
                                        <div class="p-2">Ongkir</div>
                                        <div class="p-2">:</div>
                                        <div class="p-2 text-success fw-semibold">Gratis Ongkir Sejabodetabek</div>
                                    </div>
                                    <div class="d-grid gap-2 mx-auto mt-5">
                                        {{-- <a target="_blank" href="https://wa.link/gxxpuy" class="btn btn-success btn-block py-3"
                                            style="border-radius: 5px">Beli
                                            Sekarang</a> --}}
                                        @if (Auth::guest())
                                            <a href="#" class="btn btn-success btn-block py-3"
                                                data-bs-toggle="modal" data-bs-target="#modal_nonlogin"
                                                style="border-radius: 5px">Beli
                                                Sekarang</a>
                                        @else
                                            <a href="#" class="btn btn-success btn-block py-3"
                                                data-bs-toggle="modal" data-bs-target="#modal_login"
                                                style="border-radius: 5px">Beli
                                                Sekarang</a>
                                        @endif
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
                                        <td>{{ $teralisjendela->jenis_produk }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=" fw-bold fs-5 mt-3 mb-2"> Deskripsi Produk : </div>
                        <p>
                            {{ $teralisjendela->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
