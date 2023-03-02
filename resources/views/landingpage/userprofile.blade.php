@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
    <!-- Page Header Start -->
    {{-- <div class="container-fluid bg-navy py-4 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Kontak Kami
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('/') }}" style="color: white;">
                            <span class="text-hover">Home &nbsp;</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <span  style="color: white; ">
                            Kontak Kami
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title my-3">
                    <h3 class="fw-bold m-0">Profile User</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-xl-3">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Nama</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-semibold fs-6 text-dark">{{ $user->name }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Input group-->
                <div class="row mb-xl-3">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Email</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span class="fw-semibold text-dark fs-6">{{ $user->email }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-xl-3">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Telepon</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span class="fw-semibold text-dark fs-6">{{ $user->telepon }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-xl-3">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Alamat</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-semibold fs-6 text-dark me-2">{{ $user->alamat }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->
            <div class="card-footer  text-center">
                <a href="{{ route('edituserprofile') }}" class="btn btn-success" >Edit Data Profile</a>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
