@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Admin Dashboard')

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('adminpage.adminlayout.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('adminpage.adminlayout.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Text alignment -->
                        <h5 class="pb-1 mb-4">Text alignment</h5>
                        <div class="row mb-5">
                            @for ($i = 0; $i <= 8; $i++)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card text-center mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold fs-3">Menara Tangki Air</h5>
                                            <p class="card-text">Cek Data Barang Ini</p>
                                        </div>
                                    </div>
                                </div>
                            @endfor


                        </div>
                        <!--/ Text alignment -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('adminpage.adminlayout.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
@endsection
