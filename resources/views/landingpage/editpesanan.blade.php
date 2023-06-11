@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <form action="{{ route('updatepesanan') }}" method="post">
                @csrf
                @method('POST')
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title my-3">
                        <h3 class="fw-bold m-0">Ubah Pesanan</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    <div class="row mb-xl-3">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nama</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <input type="text" readonly name="nama" class="form-control" value="{{ $pesanan->name }}">
                            <input type="hidden" name="idpesanan" class="form-control" value="{{ $pesanan->id_pesanan }}">
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Input group-->
                    <div class="row mb-xl-3">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nama Produk</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" readonly name="namaproduk" class="form-control" value="{{ $pesanan->nama_produk }}">
                            <input type="hidden" readonly name="idproduk" class="form-control" value="{{ $pesanan->id_produk }}">
                            <input type="hidden" readonly name="status" class="form-control" value="{{ $pesanan->status_pesanan }}">
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-xl-3">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Tanggal Pesan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="date" readonly name="tanggal" class="form-control" value="{{ $pesanan->tanggal_pesanan }}">
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-xl-3">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Jumlah Pesanan</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input required type="number" name="jumlah" class="form-control" value="{{ $pesanan->jumlah_pesanan}}">
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-xl-3">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Harga Produk</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input readonly type="number" name="harga" class="form-control" value="{{ $produk->harga}}">
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <div class="card-footer  text-center">
                    {{-- <a href="{{ route('userprofile') }}" class="btn btn-danger px-3">Batal</a> --}}
                    <button type="submit"  class="btn btn-success text-light">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact End -->
@endsection
