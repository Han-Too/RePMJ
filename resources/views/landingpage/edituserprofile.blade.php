@extends('landingpage.index')

@extends('landingpage.landinglayout.headhtml')

@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <form action="{{ route('storeuserprofile') }}" method="post">
                @csrf
                @method('POST')
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title my-3">
                        <h3 class="fw-bold m-0">Edit Profile User</h3>
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
                            <input type="text" name="nama" class="form-control" value="{{ $user->name }}">
                            <input type="hidden" name="id" class="form-control" value="{{ $user->id }}">
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
                            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
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
                            <input type="text" name="telepon" class="form-control" value="{{ $user->telepon }}">
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
                            <textarea name="alamat" class="form-control" cols="30" rows="5">{{ $user->alamat }}</textarea>
                            {{-- <span class="fw-semibold fs-6 text-dark me-2">{{ $user->alamat }}</span> --}}
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <div class="card-footer  text-center">
                    <a href="{{ route('userprofile') }}" class="btn btn-danger px-3">Batal</a>
                    <button type="submit"  class="btn btn-info text-light">Simpan Data Profile</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact End -->
@endsection
