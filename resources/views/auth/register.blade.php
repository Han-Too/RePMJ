<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Register | Putra Mandiri Jaya</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('landing/img/LOGO.png') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('adminpanel/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('landing/img/bglaku2.jpg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <!--begin::Wrapper-->
                <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                    <!--begin::Content-->
                    <div class="w-md-400px">
                        <!--begin::Form-->
                        <form method="POST" class="form w-100" action="{{ route('signup') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-6">
                                <!--begin::Title-->
                                <div class="text-dark fs-2hx fw-bolder">Register</div>
                                <!--end::Title-->
                            </div>
                            <div class="fv-row mb-6">
                                <!--begin::Email-->
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control bg-light border-1  @error('nama') is-invalid @enderror"
                                        id="nama" placeholder="Name" name="nama" value="{{ old('nama') }}"
                                        required autofocus />
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="nama" class="text-gray-600">Nama</label>
                                </div>
                                <!--end::Email-->
                            </div>
                            <div class="fv-row mb-6">
                                <!--begin::Email-->
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control bg-light border-1 "
                                        id="alamat" placeholder="Alamat" name="alamat"
                                        value="{{ old('alamat') }}" required  autofocus />
                                        {{-- <textarea name="alamat" id="alamat" cols="30" rows="10" ></textarea> --}}
                                    <label for="alamat" class="text-gray-600">Alamat</label>
                                </div>
                                <!--end::Email-->
                            </div>
                            <div class="fv-row mb-6">
                                <!--begin::Email-->
                                <div class="form-floating">
                                    <input type="number"
                                        class="form-control bg-light border-1 "
                                        id="telepon" placeholder="Telepon" name="telepon"
                                        value="{{ old('telepon') }}" required  autofocus />
                                    
                                    <label for="telepon" class="text-gray-600">Telepon</label>
                                </div>
                                <!--end::Email-->
                            </div>
                            <div class="fv-row mb-6">
                                <!--begin::Email-->
                                <div class="form-floating">
                                    <input type="email"
                                        class="form-control bg-light border-1  @error('email') is-invalid @enderror"
                                        id="email" placeholder="Gurdian Email" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="gmail" class="text-gray-600">Email</label>
                                </div>
                                <!--end::Email-->
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-6">
                                <!--begin::Password-->
                                <div class="form-floating">
                                    <input type="password"
                                        class="form-control bg-light border-1  @error('password') is-invalid @enderror"
                                        id="password" placeholder="Gurdian password" name="password"
                                        value="{{ old('password') }}" required autocomplete="password" autofocus />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="password" class="text-gray-600">Password</label>
                                </div>
                                <!--end::Password-->
                            </div>
                            <div class="fv-row mb-6">
                                <!--begin::Password-->
                                <div class="form-floating">
                                    <input type="password"
                                        class="form-control bg-light border-1  @error('password') is-invalid @enderror"
                                        id="password" placeholder="Gurdian password" name="password_confirmation"
                                        value="{{ old('password') }}" required autocomplete="password" autofocus />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="password" class="text-gray-600">Konfirmasi Password</label>
                                </div>
                                <!--end::Password-->
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-6 mt-6">
                                <button type="submit" id="kt_sign_in_submit" class="btn py-6" style="background-image: url('landing/img/bglaku2.jpg');">
                                    <!--begin::Indicator label-->
                                    <span class="text-light indicator-label">Register</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Submit button-->
                            <!--begin::Sign up-->
                            <div class="text-gray-500 text-center fw-semibold fs-6">Sudah Punya Akun?&nbsp;<b>LOGIN AJA</b>
                                {{-- <a href="{{ route('login') }}" class="link-primary">Login</a> --}}
                            </div>
                            <!--end::Sign up-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <!--begin::Image-->
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="{{ asset('landing/img/LOGO.png') }}" alt="" />
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="{{ asset('landing/img/LOGO-DARK.png') }}" alt="" />
                    <!--end::Image-->
                    <!--begin::Title-->
                    <h1 class="text-light fs-2qx fw-bold text-center mb-7">Putra Mandiri Jaya</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="text-light fs-base text-center fw-semibold">
                        Putra Mandiri Jaya adalah penyedia jasa las murah di
                        Kota Depok dengan pelayanan terbaik. di samping dengan kualitas pelayanan terbaik, Putra Mandiri
                        Jaya
                        memberikan harga las termurah yang bisa di dapatkan di Kota Depok.
                        Putra Mandiri Jaya menerima berbagai permintaan seperti pembuatan pagar, pembuatan
                        canopy, pembuatan tralis, pembuatan railing, pembuatan pintu Henderson, pembuatan pintu
                        besi, dan pembuatan lainnya.
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <script src="adminpanel/js/custom/authentication/sign-in/general.js"></script>
    
</body>
<!--end::Body-->

</html>
