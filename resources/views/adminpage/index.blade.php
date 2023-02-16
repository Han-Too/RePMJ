<!DOCTYPE html>
<html>

@include('adminpage.adminlayout.headhtml')

<body>
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

                <div class="app-main flex-column" id="kt_app_main">
                    
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
    @include('adminpage.adminlayout.script')
    @include('sweetalert::alert')
</body>

</html>
