<!DOCTYPE html>
<html>

@include('adminpage.adminlayout.headhtml')
{{-- background-image: url('/landing/img/bg.jpg');background-size: cover;background-repeat: no-repeat; --}}
<body style="overflow-x: hidden;height:100%;">
    <div id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    
    <!--begin::Theme mode setup on page load-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            @include('adminpage.adminlayout.header')
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column" id="kt_app_wrapper">
                <!--begin::Main-->

                <div class="app-main flex-column" id="kt_app_main" >
                    <style>
                        #kt_app_content{
                            padding-bottom: 100px;
                        }
                    </style>

                    @include('adminpage.adminlayout.sidebar')

                    @yield('tambahan')
                    @yield('content')
                    @yield('script')

                    @include('adminpage.adminlayout.scrolltop')
                    @include('adminpage.adminlayout.footer')

                </div>
                <!--begin::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
</div>
<div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y pt-0 pb-15">
                <!--begin::Wrapper-->
                <div class="mw-lg-600px mx-auto">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Masukan Jumlah Pekerjaan</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <form action="/laporan/kolomstore" method="post">
                        @csrf
                        @method('POST')
                    <div class="mb-10">
                        <!--begin::Title-->
                        <div class="d-flex">
                            <input id="kt_share_earn_link_input" type="text"
                                class="form-control form-control-solid me-3 flex-grow-1" name="kolom"
                                placeholder="Masukan Jumlah Kolom" required />
                        </div>
                        <div class="d-grid gap-2 mt-10">
                            <button type="submit" class="btn btn-success" type="button">Lanjutkan</button>
                        </div>
                        <!--end::Title-->
                    </div>
                    </form>
                    <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<div class="modal fade" id="kt_suratjalan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y pt-0 pb-15">
                <!--begin::Wrapper-->
                <div class="mw-lg-600px mx-auto">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Masukan Jumlah Barang</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <form action="/suratjalan/kolomstore" method="post">
                        @csrf
                        @method('POST')
                    <div class="mb-10">
                        <!--begin::Title-->
                        <div class="d-flex">
                            <input id="kt_share_earn_link_input" type="text"
                                class="form-control form-control-solid me-3 flex-grow-1" name="kolom"
                                placeholder="Masukan Jumlah Kolom" required />
                        </div>
                        <div class="d-grid gap-2 mt-10">
                            <button type="submit" class="btn btn-success" type="button">Lanjutkan</button>
                        </div>
                        <!--end::Title-->
                    </div>
                    </form>
                    <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<div id="kt_scrolltop" class="scrolltop mb-10" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
    @include('adminpage.adminlayout.script')
    @include('sweetalert::alert')
</body>

</html>
