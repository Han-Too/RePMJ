@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Edit Produk')

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
                                <span class="card-label fw-bold fs-3 mb-1">Detail Data Produk</span>
                                {{-- <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Kanopi</span> --}}
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <!--begin::Form-->
                                <form id="" class="form" action='/admin/produk/{{$produk->id_produk}}/update' method='post'
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Gambar Produk</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-300px h-300px" style="background-image: url({{ asset('Images/uploads/produk/'.$produk->foto) }})"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="foto" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="foto_remove" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Cancel-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                                <!--begin::Hint-->
                                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                <!--end::Hint-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                                Nama Produk
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="text" name="judul"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Produk" value="{{old('judul', $produk->nama_produk)}}" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                <span class="required">Harga</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="tel" name="harga" onKeyUp="rupiahrp(this)" onKeyPress="return isNumber(event)"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Harga" value="{{old('harga', $produk->harga)}}"  id="inputBiayaDonasi" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Produk</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <select name="jenis_produk" aria-label="Jenis Produk" data-control="select2"
                                                    data-placeholder="Pilih Jenis Produk"
                                                    class="form-select form-select-solid form-select-lg">
                                                    <option <?php if($produk->jenis_bahan == 'kanopi'){echo 'selected';} ?> value="canopy">Kanopi</option>
                                                    <option <?php if($produk->jenis_bahan == 'pagar'){echo 'selected';} ?> value="pagar">Pagar</option>
                                                    <option <?php if($produk->jenis_bahan == 'railing'){echo 'selected';} ?> value="railing">Railing</option>
                                                    <option <?php if($produk->jenis_bahan == 'teralis'){echo 'selected';} ?> value="teralis">Teralis</option>
                                                    <option <?php if($produk->jenis_bahan == 'tangga'){echo 'selected';} ?> value="tangga">Tangga</option>
                                                    <option <?php if($produk->jenis_bahan == 'pintu'){echo 'selected';} ?> value="pintu">Pintu</option>
                                                    <option <?php if($produk->jenis_bahan == 'menaraair'){echo 'selected';} ?> value="menaraair">Menara Air</option>
                                                    
                                                </select>
                                                {{-- <input type="text" name="jenis_produk"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Isikan Jenis Material" value="{{old('bahan', $produk->jenis_produk)}}" /> --}}
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label
                                                class="col-lg-4 col-form-label required fw-semibold fs-6">Keterangan</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <textarea name="keterangan" class="form-control form-control-lg form-control-solid" placeholder="Jelaskan Deskripsi"
                                                >{{old('deskripsi', $produk->keterangan)}}</textarea>
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
                                                    <option value="tersedia"
                                                    <?php if($produk->status == "tersedia")echo "selected" ?>
                                                    >Tersedia</option>
                                                    <option value="tidaktersedia"
                                                    <?php if($produk->status == "tidaktersedia")echo "selected" ?>
                                                    >Tidak Tersedia</option>
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
                                        <a href="{{ route('admin.produk.index') }}"
                                            class="btn btn-danger me-2">Batal</a>
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
