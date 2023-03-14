@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Pintu Henderson')

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
                                <span class="card-label fw-bold fs-3 mb-1">List Produk Pintu Henderson</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Pintu Henderson</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--begin::Add product-->
                                <a href="{{ route('admin.pintuhenderson.create') }}" class="btn btn-success">Tambah Produk</a>
                                <!--end::Add product-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <table class="table table-data align-middle table-row-dashed table-data fs-6 gy-5">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-dark fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-150px">Produk</th>
                                            <th class="text-center min-w-70px">ID</th>
                                            <th class="text-center min-w-100px">Jenis Material</th>
                                            <th class="text-center min-w-150px">Harga</th>
                                            <th class="text-center min-w-100px">Status</th>
                                            <th class="text-center min-w-70px">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600">
                                        @forelse ($postpintu as $key => $pintu)
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Category=-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <span class="symbol symbol-100px">
                                                            <span class="symbol-label"
                                                                style="background-image:url({{ asset('Images/uploads/pintuhenderson') }}/{{ $pintu->foto }});"></span>
                                                        </span>
                                                        <!--end::Thumbnail-->
                                                        <div class="ms-5">
                                                            <!--begin::Title-->
                                                            <a href="/admin/pintuhenderson/{{ $pintu->id }}/edit"
                                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                                data-kt-ecommerce-product-filter="product_name">{{ $pintu->judul }}</a>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Category=-->
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold ms-3">{{ $pintu->id }}</span>
                                                </td>
                                                <!--begin::SKU=-->
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold">{{ $pintu->bahan }}</span>
                                                </td>
                                                <!--end::SKU=-->
                                                <!--begin::Price=-->
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold text-dark">Rp. {{ $pintu->harga }}</span>
                                                </td>
                                                <!--end::Price=-->
                                                <!--begin::Status=-->
                                                <td class="text-center pe-0" data-order="Published">
                                                    <!--begin::Badges-->
                                                    @if ($pintu->status == 'tersedia')
                                                        <span class="badge badge-light-success">Tersedia</span>
                                                    @else
                                                        <span class="badge badge-light-danger">Tidak Tersedia</span>
                                                    @endif
                                                    <!--end::Badges-->
                                                </td>
                                                <!--end::Status=-->
                                                <!--begin::Action=-->
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-end">
                                                        <div class="p-2"><a href="/admin/pintuhenderson/{{ $pintu->id }}/edit"
                                                            class="btn btn-success btn-lg">Edit</a></div>
                                                        <div class="p-2"><a onclick="deleteConfirmation({{ $pintu->id }})"
                                                            id="delete-canopy" class="btn btn-danger btn-lg"
                                                            data-kt-ecommerce-product-filter="delete_row">Hapus</a></div>
                                                    </div>
                                                    {{-- <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Aksi
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="/admin/pintuhenderson/{{ $pintu->id }}/edit"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a onclick="deleteConfirmation({{ $pintu->id }})"
                                                                id="delete-canopy" class="menu-link px-3"
                                                                data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div> --}}
                                                    <!--end::Menu-->
                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                            <!--end::Table row-->
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
                        url: `{{ url('/admin/pintuhenderson/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'Pintu Henderson has been deleted !'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
