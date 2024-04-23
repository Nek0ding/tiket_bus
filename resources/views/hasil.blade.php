<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light ml-5">
        <a class="navbar-brand" href="#">Pemesanan Tiket Bis</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ route('pesan.index') }}">Pesan</a>
                <a class="nav-item nav-link" href="#">Invoice Pemesanan</a>
            </div>
        </div>
    </nav> --}}
    <div class="container mb-5">
        <div class="title">
            <h3 class="text-center fw-bold mt-3">Invoice Pemesanan</h3>
        </div>
        <div class="row">
            <div class="col-6 m-auto">
                <table class="table">
                    <thead>
                        <th hidden></th>
                        <th hidden></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3">Nama Pemesan : </td>
                            <td class="p-3">{{ $data->nama_pemesan }}</td>
                        </tr>
                        <tr>
                            <td class="p-3">Nomor Identitas : </td>
                            <td class="p-3">{{ $data->nomor_identitas }}</td>
                        </tr>
                        <tr>
                            <td class="p-3">No. HP : </td>
                            <td class="p-3">{{ $data->nomor_hp }}</td>
                        </tr>
                        <tr>
                            <td class="p-3">Kelas Penumpang : </td>
                            <td class="p-3">{{ $data->kelas_penumpang }}</td>
                        </tr>
                        <tr>
                            <td class="p-3">Jumlas Penumpang : </td>
                            <td class="p-3">{{ $data->jumlah_penumpang }} Orang</td>
                        </tr>
                        <tr>
                            <td class="p-3">Jumlah Penumpang Lansia : </td>
                            <td class="p-3">{{ $data->jumlah_penumpang_lansia }} Orang</td>
                        </tr>
                        <tr>
                            <td class="p-3">Harga Tiket : </td>
                            <td class="p-3">Rp. 200000</td>
                        </tr>
                        <tr>
                            <td class="p-3">Total : </td>
                            <td class="p-3">Rp. {{ $data->total }}</td>
                        </tr>
                        <tr>
                            <td class="p-3">Potongan Harga : </td>
                            <td class="p-3">Rp. {{ $data->potongan_harga }}</td>
                        </tr>
                        <tr>
                            <td class="p-3">Total Bayar : </td>
                            <td class="p-3">Rp. {{ $data->total_bayar }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('pesan.index') }}" class="btn btn-primary">Pesan lagi</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
