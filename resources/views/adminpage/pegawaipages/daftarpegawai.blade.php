@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Pegawai')

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
                                <span class="card-label fw-bold fs-3 mb-1">List Produk Pegawai</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Pegawai</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <a href="/admin/pegawai/create"
                                            class="btn btn-primary justify-content-center">
                                            Tambah
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        {{-- <a href="/admin/pegawai/cetak"
                                            class="btn btn-info btn-active-color-primary justify-content-center">
                                            Cetak
                                        </a> --}}
                                            {{-- <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path fill="#FFF"
                                                        d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                                                </svg>
                                            </span> --}}
                                            <!--end::Svg Icon-->
                                    </div>
                                </div>


                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class='table table-bordered table-condensed table-striped table-hover'>
                                    <!--begin::Table head-->
                                    <thead class="fw-bold bg-success">
                                        <tr style="line-height: 40px">
                                            <th class="p-0 min-w-150px text-center">Nama</th>
                                            <th class="p-0 min-w-150px text-center">Telepon</th>
                                            <th class="p-0 min-w-200px text-center">Email</th>
                                            <th class="p-0 min-w-100px text-center">Jabatan</th>
                                            <th class="p-0 min-w-150px text-center">Tools</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @forelse ($pegawai as $key => $pegawai)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                {{ $pegawai->nama_pegawai }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                {{ $pegawai->telepon }}
                                                            </span>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                {{ $pegawai->email }}
                                                            </span>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                {{ $pegawai->jabatan }}
                                                            </span>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-2"><a href="/admin/pegawai/{{ $pegawai->id_pegawai }}/edit"
                                                            class="btn btn-success btn-lg">Ubah</a></div>
                                                        <div class="p-2"><a onclick="deleteConfirmation({{ $pegawai->id_pegawai }})"
                                                            id="delete-canopy" class="btn btn-danger btn-lg"
                                                            data-kt-ecommerce-product-filter="delete_row">Hapus</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    <span class="fw-bold">
                                                        Data Masih Kosong
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
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
        $(document).ready(function($) {
            $(".table-row").click(function() {
                window.document.location = $(this).data("href");
            });
        });
    </script>
    <script>
        // ini untuk konfirmasi delete
        function deleteConfirmation(id) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                width: '350px',
            })
            Swal.fire({
                title: 'Hapus Data ?',
                text: "Data Yang Telah Dihapus Tidak Akan Bisa DiKembalikan !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: "get",
                        url: `{{ url('/admin/pegawai/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'Data pegawai has been deleted !'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
