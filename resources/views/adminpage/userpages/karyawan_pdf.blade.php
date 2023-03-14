<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <img src="{{ public_path() . '/Images/uploads/laporan/KOP BENGKEL.PNG' }}" alt="" class="img-fluid"
        style="margin-top: -10mm">
    <hr style="
    border: none;
    height: 3px;
    background-color: #000; 
    ">

    <div class="text-center fw-bolder mb-3">
        List Karyawan
    </div>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($karyawan as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->telepon }}</td>
                    <td>{{ $p->alamat }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
