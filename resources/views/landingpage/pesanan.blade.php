@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
<style>
    td{
        vertical-align:middle;
    }
</style>
<!-- Contact Start -->
    <div class="container-xxl py-2 mt-5">
        <div class="row">
            <div class="col">

                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title my-3">
                            <h3 class="fw-bold m-0">Pesanan {{ $user->name }}</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th class="text-center ">ID Pesanan</th>
                                    <th class="text-center ">Nama Produk</th>
                                    <th class="text-center ">Jumlah Pesanan</th>
                                    <th class="text-center ">Total Harga</th>
                                    <th class="text-center ">Status</th>
                                    <th class="text-center ">Aksi</th>
                                </thead>
                                <tbody>
                                    @forelse ($pesanan as $pesanan)
                                        <tr>
                                            <td class="text-center ">
                                                {{ $pesanan->id_pesanan }}
                                            </td>
                                            <td class="text-center ">
                                                {{ $pesanan->nama_produk }}
                                            </td>
                                            <td class="text-center ">
                                                {{ $pesanan->jumlah_pesanan }}
                                            </td>
                                            <td class="text-center ">
                                                {{ $pesanan->total_harga }}
                                            </td>
                                            <td class="text-center ">
                                                @if ($pesanan->status_pesanan == 'pending')
                                                    <span style="background:  #ffc107 "
                                                        class="p-2 text-light">Pending</span>
                                                @elseif ($pesanan->status_pesanan == 'terima')
                                                    <span style="background: #28a745" class="p-2 text-light">Selesai</span>
                                                @endif
                                            </td>
                                            <td class="text-center ">
                                                <div class="d-flex flex-row justify-content-center">
                                                    <div class="p-2">
                                                        <a href="/ubahpesanan/{{ $pesanan->id_pesanan }}"
                                                            class="btn btn-success">Ubah</a>
                                                        </div>
                                                    <div class="p-2">
                                                        <a href="/hapuspesanan/{{ $pesanan->id_pesanan }}"
                                                            class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>

                                            <td class="text-center " colspan="5">
                                                Tidak Ada Pesanan
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!--end::Row-->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title my-3">
                            <h3 class="fw-bold m-0">Transaksi {{ $user->name }}</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th class="text-center ">ID Transaksi</th>
                                    <th class="text-center ">Total Harga</th>
                                    <th class="text-center ">Status</th>
                                </thead>
                                <tbody>
                                    @forelse ($transaksi as $trans)
                                        <tr>
                                            <td class="text-center ">
                                                {{ $trans->jumlah_produk }}
                                            </td>
                                            <td class="text-center ">
                                                {{ $trans->total_harga }}
                                            </td>
                                            <td class="text-center ">
                                                @if ($trans->status_transaksi == 'proses')
                                                    <span style="background:  #ffc107 " class="p-2 text-light">Sedang
                                                        Proses</span>
                                                @elseif ($trans->status_transaksi == 'selesai')
                                                    <span style="background: #28a745" class="p-2 text-light">Selesai</span>
                                                @else
                                                    <span style="background:#007bff " class="p-2 text-light">Sedang
                                                        Dikirim</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center " colspan="3">
                                                Tidak Ada Transaksi
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!--end::Row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
