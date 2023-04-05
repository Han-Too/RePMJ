@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Transaksi')

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
                                <span class="card-label fw-bold fs-3 mb-1">List Data Transaksi</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Transaksi</span>
                            </h3>
                            <!--begin::Toolbar-->
                            {{-- <div class="card-toolbar">
                                <!--begin::Menu-->
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <a href="/admin/user/create"
                                            class="btn btn-success btn-active-color-primary justify-content-center">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span>
                                                Tambah
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>


                                <!--end::Menu-->
                            </div> --}}
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <table class="table table-data align-middle table-row-dashed table-data fs-6 gy-5">
                                    <!--begin::Table head-->
                                    <thead class="fw-bold bg-success">
                                        <!--begin::Table row-->
                                        <tr style="line-height: 40px"
                                            class="text-start text-light fw-bold fs-7 text-uppercase gs-0">
                                            <th class="text-center min-w-150px">ID Transaksi</th>
                                            <th class="text-center min-w-70px">Nama Pelanggan</th>
                                            <th class="text-center min-w-70px">ID Produk</th>
                                            <th class="text-center min-w-100px">Tanggal Transaksi</th>
                                            <th class="text-center min-w-150px">Total Harga</th>
                                            <th class="text-center min-w-100px">Status</th>
                                            <th class="text-center min-w-150px">PJ</th>
                                            <th class="text-center min-w-70px">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600">
                                        @forelse ($transaksi as $transaksi)
                                            <tr>
                                                <!--begin::Category=-->
                                                <td class="text-center pe-0">
                                                    <span
                                                        class="fw-bold ms-3 text-dark">{{ $transaksi->id_transaksi }}</span>
                                                </td>
                                                <!--end::Category=-->

                                                <td class="text-center pe-0">
                                                    <span class="fw-bold ms-3 text-dark">{{ $transaksi->name }}</span>
                                                </td>

                                                <td class="text-center pe-0">
                                                    <span class="fw-bold ms-3 text-dark">{{ $transaksi->id_produk }}</span>
                                                </td>
                                                <!--begin::SKU=-->
                                                <td class="text-center pe-0">
                                                    <span
                                                        class="fw-bold text-dark">{{ $transaksi->tanggal_transaksi }}</span>
                                                </td>
                                                <!--end::SKU=-->
                                                <!--begin::Price=-->
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold text-dark">{{ $transaksi->total_harga }}</span>
                                                </td>
                                                <!--end::Price=-->
                                                <!--begin::Status=-->
                                                <td class="text-center pe-0" data-order="Published">
                                                    <!--begin::Badges-->
                                                    {{-- <span class="badge badge-light-success">Selesai</span> --}}
                                                    @if ($transaksi->status_transaksi == 'proses')
                                                        <span class="badge badge-light-warning">Sedang Proses</span>
                                                    @elseif ($transaksi->status_transaksi == 'selesai')
                                                        <span class="badge badge-light-success">Selesai</span>
                                                    @else
                                                        <span class="badge badge-light-info">Sedang Dikirim</span>
                                                    @endif
                                                    <!--end::Badges-->
                                                </td>
                                                <td class="text-center pe-0">
                                                    <span class="fw-bold text-dark">{{ $transaksi->nama_pegawai }}</span>
                                                </td>
                                                <!--end::Status=-->
                                                <!--begin::Action=-->
                                                @if ($transaksi->status_transaksi === 'selesai')
                                                    <td>
                                                        <div class="d-flex flex-row justify-content-center">
                                                            <div class="p-2"><a
                                                                    href="/admin/transaksi/{{ $transaksi->id_transaksi }}/cetak"
                                                                    class="btn btn-info btn-lg">Cetak</a></div>
                                                        </div>
                                                    </td>
                                                @else
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-2"><a
                                                                href="/admin/transaksi/{{ $transaksi->id_transaksi }}/edit"
                                                                class="btn btn-success btn-lg">Ubah</a></div>
                                                        <div class="p-2"><a
                                                                onclick="deleteConfirmation({{ $transaksi->id_produk }})"
                                                                id="delete-produk" class="btn btn-danger btn-lg"
                                                                data-kt-ecommerce-product-filter="delete_row">Hapus</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                @endif
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
                        url: `{{ url('/admin/transaksi/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'Transaksi Telah Dihapus !'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
