@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Buat Laporan Baru')

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
                                <span class="card-label fw-bold fs-3 mb-1">Buat Surat Jalan</span>
                                {{-- <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Kanopi</span> --}}
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <!--begin::Form-->
                                <form id="" class="form" action='/suratjalan/store' method='post'
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Nomor Surat Jalan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="nomorsurat"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Nomor Surat" value="" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Nama Pelanggan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="pelanggan"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Nama Pelanggan" value="" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Alamat
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="alamat"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Alamat" value="" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Tanggal
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="date" class="form-control form-control-solid" name="tanggal" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                                                {{-- <input type="text" name="tanggal"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Judul" value="" required /> --}}
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Jenis Kendaraan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="kendaraan"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Jenis Kendaraan" value="" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                No. Polisi
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="nopol"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Nomor Polisi Kendaraan" value="" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <hr class="mb-10">
                                        <div class="container1">
                                            <!--begin::Input group-->
                                            @for ($i = 1; $i <= $kolom; $i++)
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                        Nama Barang {{ $i }}
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="namabarang[{{ $i }}]"
                                                            class="form-control form-control-lg form-control-solid"
                                                            placeholder="Isikan Barang" value="" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                        Jumlah{{ $i }}
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="jumlah[{{ $i }}]"
                                                            class="form-control form-control-lg form-control-solid"
                                                            placeholder="Isikan Jumlah" value="" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                        Keterangan {{ $i }}
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row">
                                                        <input type="text" name="keterangan[{{ $i }}]"
                                                            class="form-control form-control-lg form-control-solid"
                                                            placeholder="Isikan Keterangan" value="" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <hr class="mb-10">
                                            @endfor

                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end px-9">
                                        {{-- <button type="button"
                                            class="btn btn-light btn-active-light-primary me-2 add_form_field">
                                            Tambah Kolom</button> --}}
                                        {{-- <a href="{{ route('suratjalan') }}"
                                            class="btn btn-light btn-active-light-primary me-2">Batal</a> --}}
                                        <button type="submit" class="btn btn-primary"
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
    <script>
        let previousLength = 0;

        const handleInput = (event) => {
            const bullet = "\u2022";
            const newLength = event.target.value.length;
            const characterCode = event.target.value.substr(-1).charCodeAt(0);

            if (newLength > previousLength) {
                if (characterCode === 10) {
                    event.target.value = `${event.target.value}${bullet} `;
                } else if (newLength === 1) {
                    event.target.value = `${bullet} ${event.target.value}`;
                }
            }

            previousLength = newLength;
        }
    </script>
    <script>
        $(document).ready(function() {
            var max_fields = 10;
            var wrapper = $(".container1");
            var add_button = $(".add_form_field");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append(
                        // '<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'
                        // '<div class="row mb-6"><label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Pekerjaan</label><div class="col-lg-8 fv-row"><input type="text" name="bahan" class="form-control form-control-lg form-control-solid"placeholder="Isikan Jenis Material" value="" /></div></div>'
                        '<div class="row mb-6">\
                                                                        <!--begin::Label-->\
                                                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">\
                                                                            Nama Pekerjaan\
                                                                        </label>\
                                                                        <!--end::Label-->\
                                                                        <!--begin::Col-->\
                                                                        <div class="col-lg-8 fv-row">\
                                                                            <input type="text" name="judulkerjaan"\
                                                                                class="form-control form-control-lg form-control-solid"\
                                                                                placeholder="Isikan Jenis Material" value="" />\
                                                                        </div>\
                                                                        <!--end::Col-->\
                                                                    </div>\
                                                                    <div class="row mb-6">\
                                                                        <!--begin::Label-->\
                                                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">\
                                                                            Bahan Yang Digunakan\
                                                                        </label>\
                                                                        <!--end::Label-->\
                                                                        <!--begin::Col-->\
                                                                        <div class="col-lg-8 fv-row">\
                                                                            <input type="text" name="judulkerjaan"\
                                                                                class="form-control form-control-lg form-control-solid"\
                                                                                placeholder="Isikan Jenis Material" value="" />\
                                                                        </div>\
                                                                        <!--end::Col-->\
                                                                    </div>\
                                                                    <div class="row mb-6">\
                                                                        <!--begin::Label-->\
                                                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">\
                                                                            Total Luas\
                                                                        </label>\
                                                                        <!--end::Label-->\
                                                                        <!--begin::Col-->\
                                                                        <div class="col-lg-8 fv-row">\
                                                                            <input type="text" name="judulkerjaan"\
                                                                                class="form-control form-control-lg form-control-solid"\
                                                                                placeholder="Isikan Jenis Material" value="" />\
                                                                        </div>\
                                                                        <!--end::Col-->\
                                                                    </div>\
                                                                    <div class="row mb-6">\
                                                                        <!--begin::Label-->\
                                                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">\
                                                                            Harga / Satuan\
                                                                        </label>\
                                                                        <!--end::Label-->\
                                                                        <!--begin::Col-->\
                                                                        <div class="col-lg-8 fv-row">\
                                                                            <input type="text" name="harga"\
                                                                                class="form-control form-control-lg form-control-solid"\
                                                                                placeholder="Isikan Jenis Material" value="" />\
                                                                        </div>\
                                                                        <!--end::Col-->\
                                                                    </div>\
                                                                    <div class="row mb-6">\
                                                                        <!--begin::Label-->\
                                                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">\
                                                                            Total Jumlah\
                                                                        </label>\
                                                                        <!--end::Label-->\
                                                                        <!--begin::Col-->\
                                                                        <div class="col-lg-8 fv-row">\
                                                                            <input type="text" name="jumlah"\
                                                                                class="form-control form-control-lg form-control-solid"\
                                                                                placeholder="Isikan Jenis Material" value="" />\
                                                                        </div>\
                                                                        <!--end::Col-->\
                                                                    </div>\
                                                                    <div class="row mb-6">\
                                                                        <!--begin::Label-->\
                                                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">\
                                                                            Keterangan\
                                                                        </label>\
                                                                        <!--end::Label-->\
                                                                        <!--begin::Col-->\
                                                                        <div class="col-lg-8 fv-row">\
                                                                            <input type="text" name="judulkerjaan"\
                                                                                class="form-control form-control-lg form-control-solid"\
                                                                                placeholder="Isikan Jenis Material" value="" />\
                                                                        </div>\
                                                                        <!--end::Col-->\
                                                                    </div>\
                                                                    <hr class="mb-10">'
                    ); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });

            $(wrapper).on("click", ".delete", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });
    </script>
@endsection
