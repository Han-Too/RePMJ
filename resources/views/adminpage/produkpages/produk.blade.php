@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Produk Page')

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
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">List Data Produk</span>
                                        <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Produk</span>
                                    </h3>
                                    <!--end::Svg Icon-->

                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--begin::Add product-->
                                <a href="{{ route('admin.produk.create') }}" class="btn btn-success">Tambah Produk</a>
                                <!--end::Add product-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-data align-middle table-row-dashed table-data fs-6 gy-5">
                                    <!--begin::Table head-->
                                    <thead  class="fw-bold bg-success">
                                        <!--begin::Table row-->
                                        <tr  style="line-height: 40px" class="text-start text-light fw-bold fs-7 text-uppercase gs-0">
                                            <th class="text-center min-w-150px">Produk</th>
                                            <th class="text-center min-w-70px">ID</th>
                                            <th class="text-center min-w-100px">Jenis Produk</th>
                                            <th class="text-center min-w-150px">Harga</th>
                                            <th class="text-center min-w-100px">Status</th>
                                            <th class="text-center min-w-70px">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600">
                                        @forelse ($produk as $produk)
                                        <tr>
                                            <!--begin::Category=-->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <span class="symbol symbol-100px">
                                                        <span class="symbol-label"
                                                            style="background-image:url({{ asset('Images/uploads/produk/'.$produk->foto) }});"></span>
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <span class="text-gray-800 fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">{{ $produk->nama_produk }}</span>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Category=-->
                                            
                                            <td class="text-center pe-0">
                                                <span class="fw-bold ms-3 text-dark">{{ $produk->id_produk }}</span>
                                            </td>
                                            <!--begin::SKU=-->
                                            <td class="text-center pe-0">
                                                <span class="fw-bold text-dark">{{ $produk->jenis_produk }}</span>
                                            </td>
                                            <!--end::SKU=-->
                                            <!--begin::Price=-->
                                            <td class="text-center pe-0">
                                                <span class="fw-bold text-dark">Rp. {{ $produk->harga }}</span>
                                            </td>
                                            <!--end::Price=-->
                                            <!--begin::Status=-->
                                            <td class="text-center pe-0" data-order="Published">
                                                <!--begin::Badges-->
                                                @if ($produk->status == 'tersedia')
                                                    <span class="badge badge-light-success">Tersedia</span>
                                                @else
                                                    <span class="badge badge-light-danger">Tidak Tersedia</span>
                                                @endif
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Action=-->
                                            <td class="text-center">
                                                <div class="d-flex flex-row justify-content-center">
                                                    <div class="p-2"><a href="/admin/produk/{{ $produk->id_produk }}/edit"
                                                        class="btn btn-success btn-lg">Ubah</a></div>
                                                    <div class="p-2"><a onclick="deleteConfirmation({{ $produk->id_produk }})"
                                                        id="delete-produk" class="btn btn-danger btn-lg"
                                                        data-kt-ecommerce-product-filter="delete_row">Hapus</a></div>
                                                </div>
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    Data Masih Kosong
                                                </td>
                                            </tr>
                                        @endforelse 
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                        
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

    <script src="{{ asset('adminpanel/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <link href="{{ asset('adminpanel/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />

    {{-- <script>
        $(document).ready(function($) {
            $(".table-row").click(function() {
                window.document.location = $(this).data("href");
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('.table-data').DataTable({
                "dom": "< <'pull-left'f><t> >"
                // <' row'<'col col-lg-2 py-3'i><'col-md-auto'l><'col'p>>
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
                title: 'Hapus Produk ?',
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
                        url: `{{ url('/admin/produk/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'Produk Telah Dihapus!'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
