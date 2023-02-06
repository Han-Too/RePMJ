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
    @include('adminpage.adminlayout.script')
    @include('sweetalert::alert')
</body>

</html>
