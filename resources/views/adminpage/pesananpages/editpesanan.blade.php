@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Edit Pesanan')

@section('tambahan')
    <style>
        .table-row {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <!--begin::Content wrapper-->
    <div id="kt_app_content" class="content d-flex flex-column flex-column-fluid">
        <!--begin::Content container-->

        <div id="kt_app_content_container" class="container-fluid">
            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-bold mb-10">

            </ol>
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Tables widget 14-->
                    <div class="card shadow-lg">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Detail Edit Pesanan</span>
                                {{-- <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Karyawan</span> --}}
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <!--begin::Form-->
                                <form id="" class="form" action='/admin/pesanan/{{ $pesanan->id_pesanan }}/update' method='post'
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Nama Pemesan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="hidden" name="id" value="{{ $pesanan->id_pesanan }}">
                                                <input type="text" name="nama" readonly
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Nama" value="{{old('nama', $pesanan->name)}}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Produk Yang Dipesan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="hidden" name="id" value="{{ $pesanan->id_produk }}">
                                                <input type="text" name="nama" readonly
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Nama" value="{{old('nama', $produk->nama_produk)}}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                <span class="required">Tanggal Pemesanan</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="date" name="tanggal" readonly
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="{{old('email', $pesanan->tanggal_pesanan)}}"  />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Jumlah Produk Yang Dipesan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="jumlah" required
                                                    class="form-control form-control-lg form-control-solid" readonly
                                                    placeholder="Isikan Jumlah" value="{{ $pesanan->jumlah_pesanan }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Total Harga Pesanan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="jumlah" required readonly
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Jumlah" value="{{ $pesanan->total_harga }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                <span class="required">Status</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <select name="status" aria-label="Status" data-control="select"
                                                    data-placeholder="Pilih Status"
                                                    class="form-select form-select-solid form-select-lg">
                                                    <option value="pending"
                                                    <?php if($pesanan->status_pesanan == "pending")echo "selected" ?>
                                                    >Pending</option>
                                                    <option value="terima"
                                                    <?php if($pesanan->status_pesanan == "terima")echo "selected" ?>
                                                    >Terima</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        {{-- //////////////////////// --}}
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                <span class="required">Penanggung Jawab</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <select name="pegawai" aria-label="Status" data-control="select"
                                                    data-placeholder="Pilih Status"
                                                    class="form-select form-select-solid form-select-lg">
                                                    @foreach ($pegawai as $pegawai)
                                                        
                                                    <option value="{{ $pegawai->nama_pegawai }}">{{ $pegawai->nama_pegawai }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end px-9">
                                        {{-- <a href="{{ route('admin.pesanan.index') }}" class="btn btn-light btn-active-light-primary me-2">Batal</a> --}}
                                        <button type="submit" class="btn btn-success"
                                            id="kt_account_profile_details_submit">Simpan</button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end: Card Body-->
                        <div class="card-footer border-top p-9">

                        </div>
                    </div>

                </div>
                <!--end::Tables widget 14-->
            </div>
            <!--end::Col-->

        </div>

        <!--end::Row-->

    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')
    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46) {
                return false;
            }
            return true;
        }

        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        }

        function rupiahrp(objek, separator) {
            var nilai_1 = objek.value;
            var nilai_2 = nilai_1.replace(/,/g, "");
            var nilai_3 = formatNumber(nilai_2);
            objek.value = nilai_3;
        }
    </script>
@endsection
