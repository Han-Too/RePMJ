<!-- JavaScript Libraries -->
{{-- <script>
        var msg = '{{ Session::get('alert') }}';
        var exist = '{{ Session::has('alert') }}';
        if (exist) {
            setTimeout(function() {
                alert(msg);
            }, 5000);
        }
</script> --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('landing/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('landing/js/main.js') }}"></script>