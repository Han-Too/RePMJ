@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Kanopi')

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
                                        <span class="card-label fw-bold fs-3 mb-1">List Produk Kanopi</span>
                                        <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Kanopi</span>
                                    </h3>
                                    <!--end::Svg Icon-->

                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--begin::Add product-->
                                <a href="{{ route('admin.canopy.create') }}" class="btn btn-success">Tambah Produk</a>
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
                                        @forelse ($kanopi as $key => $postcanopy)
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Category=-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <span class="symbol symbol-100px">
                                                            <span class="symbol-label"
                                                                style="background-image:url({{ asset('Images/uploads/canopy') }}/{{ $postcanopy->foto }});"></span>
                                                        </span>
                                                        <!--end::Thumbnail-->
                                                        <div class="ms-5">
                                                            <!--begin::Title-->
                                                            <a href="/admin/canopy/{{ $postcanopy->id }}/edit"
                                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                                data-kt-ecommerce-product-filter="product_name">{{ $postcanopy->judul }}</a>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Category=-->
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold ms-3">{{ $postcanopy->id }}</span>
                                                </td>
                                                <!--begin::SKU=-->
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold">{{ $postcanopy->bahan }}</span>
                                                </td>
                                                <!--end::SKU=-->
                                                <!--begin::Price=-->
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold text-dark">Rp. {{ $postcanopy->harga }}</span>
                                                </td>
                                                <!--end::Price=-->
                                                <!--begin::Status=-->
                                                <td class="text-center pe-0" data-order="Published">
                                                    <!--begin::Badges-->
                                                    @if ($postcanopy->status == 'tersedia')
                                                        <span class="badge badge-light-success">Tersedia</span>
                                                    @else
                                                        <span class="badge badge-light-danger">Tidak Tersedia</span>
                                                    @endif
                                                    <!--end::Badges-->
                                                </td>
                                                <!--end::Status=-->
                                                <!--begin::Action=-->
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
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
                                                            <a href="/admin/canopy/{{ $postcanopy->id }}/edit"
                                                                class="menu-link px-3">Edit</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a onclick="deleteConfirmation({{ $postcanopy->id }})"
                                                                id="delete-canopy" class="menu-link px-3"
                                                                data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
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
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                        {{-- <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">List Produk Kanopi</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Kanopi</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <a href="/admin/canopy/create"
                                    class="btn btn-icon btn-success btn-active-color-primary justify-content-center">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path fill="#FFF"
                                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                        </svg>
                                    </span>
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
                                        <tr style="line-height: 40px">
                                            <th class="p-0 min-w-150px text-start">Nama Produk</th>
                                            <th class="p-0 min-w-200px text-start">Jenis Material</th>
                                            <th class="p-0 min-w-150px text-start">Harga</th>
                                            <th class="p-0 min-w-100px text-start">Status</th>
                                            <th class="p-0 min-w-150px text-center">Tools</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @forelse ($kanopi as $key => $postcanopy)
                                            <tr>
                                                <td class="text-start">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-45px me-5">
                                                            <img alt="Pic"
                                                                src="{{ asset('Images/uploads/canopy') }}/{{ $postcanopy->foto }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Name-->
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <span class="text-dark fw-bold  mb-1 fs-6">
                                                                {{ $postcanopy->judul }}
                                                            </span>
                                                            <span class="text-muted  fw-semibold text-muted d-block fs-7">
                                                                <span class="text-dark">Kode</span>:
                                                                {{ $postcanopy->id }}</span>
                                                        </div>
                                                        <!--end::Name-->
                                                    </div>
                                                </td>
                                                <td class="text-start">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        {{ $postcanopy->bahan }}
                                                    </span>
                                                </td>
                                                <td class="text-start">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        Rp. {{ $postcanopy->harga }}
                                                    </span>
                                                </td>
                                                <td class="text-start">
                                                    @if ($postcanopy->status == 'tersedia')
                                                        <span class="badge badge-light-success">Tersedia</span>
                                                    @else
                                                        <span class="badge badge-light-danger">Tidak Tersedia</span>
                                                    @endif

                                                </td>
                                                <td class="text-center">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                <path fill="currentColor"
                                                                    d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="/admin/canopy/{{ $postcanopy->id }}/edit"
                                                        class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3"
                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <button onclick="deleteConfirmation({{$postcanopy->id}})" id="delete-canopy"
                                                        class="btn btn-icon btn-bg-light btn-active-color-success btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.5"
                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.5"
                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
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
                        </div> --}}
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
                title: 'Are you sure ?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: "get",
                        url: `{{ url('/admin/canopy/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'canpy has been deleted !'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
