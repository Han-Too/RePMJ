@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Edit Karyawan')

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
                                <span class="card-label fw-bold fs-3 mb-1">Detail Produk Karyawan</span>
                                {{-- <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Karyawan</span> --}}
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <!--begin::Form-->
                                <form id="" class="form" action='/admin/karyawan/{{$karyawan->id}}/update' method='post'
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Nama Karyawan
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="nama"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Nama" value="{{old('nama', $karyawan->nama)}}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                <span class="required">Email</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="email" name="email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Email" value="{{old('email', $karyawan->email)}}"  />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Telepon
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="number" name="telepon"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Jenis Material" value="{{old('telepon', $karyawan->telepon)}}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <!--begin::Input-->
                                                <select name="status" aria-label="Status" data-control="select2"
                                                    data-placeholder="Pilih Status"
                                                    class="form-select form-select-solid form-select-lg">
                                                    <option value="aktif"
                                                    <?php if($karyawan->status == "aktif")echo "selected" ?>
                                                    >Aktif</option>
                                                    <option value="tidakaktif"
                                                    <?php if($karyawan->status == "tidakaktif")echo "selected" ?>
                                                    >Tidak Aktif</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end px-9">
                                        <button type="reset"
                                            class="btn btn-light btn-active-light-primary me-2">Batal</button>
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
@endsection
