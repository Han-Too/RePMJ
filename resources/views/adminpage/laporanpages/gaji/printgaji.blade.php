<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gaji Print</title>
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

<body>
    <style>
        .column {
            float: left;
            width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
            margin-bottom: 10px;
            margin-top: 10px;
        }
    </style>
    <img src="{{ asset('Images/uploads/laporan/KOP BENGKEL.PNG') }}" alt="" class="img-fluid"
        style="margin-top: -10mm">
    <hr style="
        border: none;
        height: 3px;
        background-color: #000; 
        ">

    <div class="text-center fw-bolder mb-3">
        Total Pendapatan {{ $karyawan->name }}
    </div>
    <div class="row text-start" style="margin-bottom: 1em;margin-top: 1em">
        <div class="column">
            Nama &nbsp; : &nbsp; {{ $karyawan->nama }}
        </div>
        <div class="column">
            Telepon &nbsp; : &nbsp; {{ $karyawan->telepon }}
        </div>
        <div class="column">
            Email &nbsp; : &nbsp; {{ $karyawan->email }}
        </div>
        <div class="column">
            Status &nbsp; : &nbsp; {{ $karyawan->status }}
        </div>
    </div>
    

    <div class="table-responsive mt-10">

        <table class="table table-bordered border-dark mt-xl-5" nobr="true">
            <thead>
                <tr class="fw-bold fs-10" style="vertical-align: middle; height: 80px">
                    <th class="p-0 min-w-150px text-center">Nama Pekerjaan</th>
                    <th class="p-0 min-w-100px text-center">Pendapatan</th>
                    <th class="p-0 min-w-80px text-center">Keterangan</th>
                </tr>
            </thead>
            <tbody nobr="true">
                @for ($i = 1; $i <= $hitung; $i++)
                    <tr style="vertical-align: middle;" nobr="true">
                        <td nobr="true">
                            {{ $kerjaan[$i] }}
                        </td>
                        <td class="text-center">Rp. {{ number_format($pendapatan[$i]) }}</td>
                        <td class="text-center">{{ $keterangan[$i] }}</td>
                    </tr>
                @endfor
                <tr>
                    <td colspan="2" class="text-end fw-bold">
                        Total Keseluruhan
                    </td>
                    <td>
                        Rp. {{ number_format($total) }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-end fw-bold">
                        Total Kasbon
                    </td>
                    <td>
                        Rp. {{ number_format($kasbon) }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-end fw-bold">
                        Pendapatan Bersih
                    </td>
                    <td>
                        Rp. {{ number_format($total - $kasbon) }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center">
                        Terbilang : {{ terbilang($total - $kasbon) }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div style="text-align:right; margin:0px auto 0px auto;align-items: end;">
            <div class="d-flex flex-column mb-3">
                <div class="p-2">Depok, {{ date('d F Y') }}</div>
                <div class="p-20"><br><br><br></div>
                <div class="p-2">Pemilik</div>
            </div>

        </div>

    </div>

    <script>
        window.print();
        window.onafterprint = window.close;
    </script>
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
                /* margin-top: 0px; */
                size: A4;
                margin: 10mm 0mm;
            }

            body {
                -webkit-print-color-adjust: exact;
                margin: 0mm 10mm 10mm 10mm;
                padding-top: 5mm;
            }
        }
    </style>
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
    @endphp
</body>

</html>
