<html>
@include('landingpage.landinglayout.headhtml')
@include('landingpage.landinglayout.header')

<body>
    @yield('tambahan')
    @yield('content')
    @yield('script')

    @include('sweetalert::alert')
    @include('landingpage.landinglayout.footer')
    @include('landingpage.landinglayout.script')
    <script>
        var msg = '{{ Session::get('alert') }}';
        var exist = '{{ Session::has('alert') }}';
        if (exist) {
            setTimeout(function() {
                alert(msg);
            }, 5000);
        }
    </script>
</body>
<!--end::Body-->

</html>
