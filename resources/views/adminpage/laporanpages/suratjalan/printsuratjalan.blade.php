<!DOCTYPE html>
<html lang="en">

<head>
    <title>Surat Jalan Print</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--end::Global Stylesheets Bundle-->
</head>

<body class="mx-4">
    <div class="row">
        <div class="col-2" style="margin-right: 20px">
            <img src="{{ asset('landing/img/LOGO.png') }}" alt="" height="100" width="auto">
        </div>
        <div class="col-7">
            <table>
                <tr>
                    <td style="font-weight: 700; font-size: 30px">PUTRA MANDIRI JAYA</td>
                </tr>
                <tr>
                    <td style="font-size: 12px">
                        Jl.Bojongsari Baru No.49 Sebelah Puri Arsana. Rt.01/07 <br>
                        Kel. Bojongsari Baru, Kec. Bojongsari, Kota Depok - 16516 <br>
                        081385291423 - 0817885944
                    </td>
                </tr>
            </table>
        </div>
        <div class="col right-0">
            Depok, {{ tgl_indo(date('Y-m-d')) }} <br>
            Kepada Yth : <br>
            {{ $pelanggan }}
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-9" style="font-size: 25px; font-weight: 700; margin-right: 10px">
            SURAT JALAN NO. {{ $nomor }}
        </div>
        <div class="col">
            {{-- <u>...................</u> --}}
        </div>
    </div>

    <div class="mt-3" style="font-size: 15px;">
        Kami kirimkan barang-barang tersebut dibawah ini dengan kendaraan {{ $kendaraan }} No. Pol {{ $nopol }}
    </div>
    {{-- <hr style="
        border: none;
        height: 3px;
        background-color: #000; 
        "> --}}

    <table width="100%" class="table-bordered mt-2">
        <thead height="40px">
            <th class="text-center fw-bold">
                No
            </th>
            <th class="text-center fw-bold">
                Nama Barang
            </th>
            <th class="text-center fw-bold">
                Jumlah
            </th>
            <th class="text-center fw-bold">
                Keterangan
            </th>
        </thead>
        <tbody>
            @for ($i = 1; $i <=$kolom; $i++)
                <tr height="30px">
                    <td width="5%" class="text-center">
                        {{ $i }}
                    </td>
                    <td width="60%" class="text-start">
                        &nbsp;{{ $namabarang[$i] }}
                    </td>
                    <td width="10%" class="text-center">
                        {{ $jumlah[$i] }}
                    </td>
                    <td width="25%" class="text-center">
                        {{ $keterangan[$i] }}
                    </td>
                </tr>
            @endfor
        </tbody>
        <div class="mt-3 " style="margin-left: 150px;">
            <table class="table table-borderless fixed-bottom">
                <tr>
                    <td align="center">
                        <table>
                            <tr class="text-center">
                                <td>Yang Menerima</td>
                            </tr>
                            <tr class="text-center">
                                <td height="60px"></td>
                            </tr>
                            <tr class="text-center">
                                <td>&#40;............................&#41;</td>
                            </tr>
                        </table>
                    </td>
                    <td align="center">
                        <table>
                            <tr class="text-center">
                                <td>Hormat Kami</td>
                            </tr>
                            <tr class="text-center">
                                <td height="60px"></td>
                            </tr>
                            <tr class="text-center">
                                <td>&#40;............................&#41;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>


        </div>
    </table>



    {{-- ////////////////////////////////////////    --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <style>
        @media print {
            @page {
                margin-top: 0px;
                size: landscape;
                margin: 5mm 5mm;
            }

            body {
                -webkit-print-color-adjust: exact;
                /* margin: 0mm 10mm 10mm 10mm; */
            }
        }
    </style>
    <script>
        window.print();
        window.onfocus = function() {
            window.close();
        }
    </script>
    @php
        function penyebut($nilai)
        {
            $nilai = abs($nilai);
            $huruf = ['', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh', 'Sebelas'];
            $temp = '';
            if ($nilai < 12) {
                $temp = ' ' . $huruf[$nilai];
            } elseif ($nilai < 20) {
                $temp = penyebut($nilai - 10) . ' Belas';
            } elseif ($nilai < 100) {
                $temp = penyebut($nilai / 10) . ' Puluh' . penyebut($nilai % 10);
            } elseif ($nilai < 200) {
                $temp = ' Seratus' . penyebut($nilai - 100);
            } elseif ($nilai < 1000) {
                $temp = penyebut($nilai / 100) . ' Ratus' . penyebut($nilai % 100);
            } elseif ($nilai < 2000) {
                $temp = ' Seribu' . penyebut($nilai - 1000);
            } elseif ($nilai < 1000000) {
                $temp = penyebut($nilai / 1000) . ' Ribu' . penyebut($nilai % 1000);
            } elseif ($nilai < 1000000000) {
                $temp = penyebut($nilai / 1000000) . ' Juta' . penyebut($nilai % 1000000);
            } elseif ($nilai < 1000000000000) {
                $temp = penyebut($nilai / 1000000000) . ' Milyar' . penyebut(fmod($nilai, 1000000000));
            } elseif ($nilai < 1000000000000000) {
                $temp = penyebut($nilai / 1000000000000) . ' Trilyun' . penyebut(fmod($nilai, 1000000000000));
            }
            return $temp;
        }
        
        function terbilang($nilai)
        {
            if ($nilai < 0) {
                $hasil = 'minus ' . trim(penyebut($nilai));
            } else {
                $hasil = trim(penyebut($nilai));
            }
            return $hasil;
        }
        
        function tgl_indo($tanggal)
        {
            $bulan = [
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            $pecahkan = explode('-', $tanggal);
        
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
        
            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
    @endphp
</body>

</html>
