@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Edit Transaksi')

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
                                <span class="card-label fw-bold fs-3 mb-1">Detail Edit User</span>
                                {{-- <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Karyawan</span> --}}
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <!--begin::Form-->
                                <form id="" class="form"
                                    action='/admin/transaksi/{{ $transaksi->id_transaksi }}/update' method='post'
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Nama Pelanggan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="hidden" name="idpesanan" value="{{ $transaksi->id_pesanan }}">
                                                <input type="text" name="nama" readonly
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Nama" value="{{ old('nama', $transaksi->name) }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                <span class="required">Produk</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="hidden" name="idproduk" value="{{ $transaksi->id_produk }}">
                                                <input type="text" name="namaproduk" readonly
                                                    class="form-control form-control-lg form-control-solid" readonly
                                                    value="{{ old('email', $produk->nama_produk) }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>

                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Tanggal Transaksi
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="date" name="tanggal" readonly
                                                    class="form-control form-control-lg form-control-solid"
                                                    value="{{ old('email', $transaksi->tanggal_transaksi) }}" />

                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <!--end::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Jumlah Produk Pesanan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="jumlah"
                                                    class="form-control form-control-lg form-control-solid" readonly
                                                    value="{{ old('nama', $transaksi->jumlah_produk) }}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Total Harga
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="hidden" name="totalharga"
                                                    value="{{ $transaksi->total_harga }}" />
                                                <input type="text" name="harga"
                                                    class="form-control form-control-lg form-control-solid" readonly
                                                    value="Rp. {{ old('totalharga', $transaksi->total_harga) }}" />
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
                                                    <option value="proses" <?php if ($transaksi->status_transaksi == 'proses') {
                                                        echo 'selected';
                                                    } ?>>Sedang Proses</option>
                                                    <option value="kirim" <?php if ($transaksi->status_transaksi == 'kirim') {
                                                        echo 'selected';
                                                    } ?>>Sedang Dikirim</option>
                                                    <option value="selesai" <?php if ($transaksi->status_transaksi == 'selesai') {
                                                        echo 'selected';
                                                    } ?>>Telah Selesai</option>

                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                <span class="required">PJ</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <select name="pegawai" aria-label="Status" data-control="select"
                                                    data-placeholder="Pilih Pegawai"
                                                    class="form-select form-select-solid form-select-lg">
                                                    @foreach ($pegawai as $pegawai)
                                                        <option value="{{ $pegawai->nama_pegawai }}" 
                                                        <?php if ($transaksi->nama_pegawai == $pegawai->nama_pegawai) {
                                                            echo 'selected';
                                                        } ?>>
                                                            {{ $pegawai->nama_pegawai }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end px-9">
                                        {{-- <a href="{{ route('admin.user.index') }}" class="btn btn-light btn-active-light-primary me-2">Batal</a> --}}
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
