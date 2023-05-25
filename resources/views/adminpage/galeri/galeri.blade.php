@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Galeri')

@section('tambahan')
    <style>
        .table-row {
            cursor: pointer;
        }
        td {
            vertical-align: middle;
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
                                <span class="card-label fw-bold fs-3 mb-1">List Gambar Galeri</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Galeri</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <a href="/admin/galeri/create"
                                    class="btn btn-primary btn-active-color-primary justify-content-center">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                    Tambah
                                    <!--end::Svg Icon-->
                                </a>
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
                                        <tr style="line-height: 40px" class="text-start text-light fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-350px text-center">Judul</th>
                                            <th class="min-w-400px text-center">Foto</th>
                                            <th class="min-w-150px text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @forelse ($galeri as $key => $galeri)
                                            <tr>
                                                <td class="text-center">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        {{ $galeri->nama_produk }}
                                                    </span>
                                                </td>
                                                <td class="text-start">
                                                    <img alt="Pic" width="500" height="auto" src="{{ asset('Images/uploads/galeri') }}/{{ $galeri->foto }}" />
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-2"><a href="/admin/galeri/{{ $galeri->id_galeri }}/edit"
                                                            class="btn btn-success btn-lg">Ubah</a></div>
                                                        <div class="p-2"><a onclick="deleteConfirmation({{ $galeri->id_galeri }})"
                                                            id="delete-canopy" class="btn btn-danger btn-lg"
                                                            data-kt-ecommerce-product-filter="delete_row">Hapus</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="2" class="text-center">
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
                title: 'Are you sure ?',
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
                        url: `{{ url('/admin/galeri/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'Data Galeri Terhapus !'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
