<html>
@include('landingpage.landinglayout.headhtml')
@include('landingpage.landinglayout.header')
<body>
    @yield('tambahan')
    @yield('content')
    @yield('script')

    @include('landingpage.landinglayout.footer')
    @include('landingpage.landinglayout.script')
</body>
<!--end::Body-->

</html>

