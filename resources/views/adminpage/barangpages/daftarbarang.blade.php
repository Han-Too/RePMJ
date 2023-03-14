@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Data Barang')

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
            
            <div class="card card-flush h-md-100 mt-5">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Data Barang</span>
                    </h3>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-4 fw-bold border-bottom-0">
                                    <th class="p-0 pb-3 min-w-175px text-center fw-bolder">Jenis Barang</th>
                                    <th class="p-0 pb-3 w-50px text-center fw-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Kanopi</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.canopy.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Pagar</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.pagar.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Pintu Besi</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.pintubesi.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Pintu Kasa Nyamuk</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.pintukasanyamuk.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Pintu Henderson</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.pintuhenderson.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Railing Balkon</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.railingbalkon.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Railing Tangga</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.railingtangga.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Tangga Besi</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.tanggabesi.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Tangga Putar</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.tanggaputar.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Teralis Jendela</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.teralisjendela.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Teralis Pintu</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.teralispintu.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center pe-0">
                                        <span
                                            class="text-dark fw-bold fs-6">Menara Tangki Air</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.menaraair.index') }}"
                                            class="btn btn-bg-success btn-lg w-100px h-50px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                            <span class="text-light fw-bold">
                                                Pilih
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end: Card Body-->
            </div>

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
                        url: `{{ url('/admin/teralispintu/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'Teralis Pintu has been deleted !'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
