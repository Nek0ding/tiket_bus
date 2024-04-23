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
                <a class="nav-item nav-link" href="{{ route('hasil-pesanan.index') }}">Hasil</a>
            </div>
        </div>
    </nav> --}}
    <div class="container mb-5">
        <div class="title">
            <h3 class="text-center fw-bold mt-3">Form Pemesanan</h3>
        </div>
        <div class="row">
            <div class="col-6 m-auto">
                <form action="{{ route('pesan.store') }}" method="POST" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_pendaftar" name="nama"
                            aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor Identitas</label>
                        <input type="number" class="form-control" id="nomor_identitas" name="nomor_identitas" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No. HP</label>
                        <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kelas Penumpang</label>
                        <select id="kelas_penumpang" name="kelas_penumpang" class="form-select">
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Eksekutif">Eksekutif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jadwal Keberangkatan</label>
                        <input type="date" class="form-control" id="jadwal_keberangkatan" name="jadwal_keberangkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Penumpang</label>
                        <select id="jumlah_penumpang" class="form-select" name="jumlah_penumpang" onchange="setDisabled()">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Penumpang Lansia *Usia
                            60th+</label>
                            <select id="jumlah_lansia" class="form-select" name="jumlah_lansia" onchange="setDisabled()">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total Bayar</label>
                        <input type="number" class="form-control" id="total_bayar" name="total_bayar"
                            aria-describedby="emailHelp" readonly>
                        <input type="number" class="form-control" id="total" name="total"
                            aria-describedby="emailHelp" hidden>
                        <input type="number" class="form-control" id="potongan_harga" name="potongan_harga"
                            aria-describedby="emailHelp" hidden>
                    </div>
                    <a onclick="hitungTotalBayar()" class="btn btn-primary">Hitung Total Bayar</a>
                    <button type="submit" class="btn btn-primary" id="btn_submit" disabled>Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        function hitungTotalBayar(){
            var jumlah_penumpang = document.getElementById("jumlah_penumpang").value;
            var jumlah_lansia = document.getElementById("jumlah_lansia").value;
            var total_input = document.getElementById("total");
            var potongan_input = document.getElementById("potongan_harga");
            var total_bayar_input = document.getElementById("total_bayar");
            var btn_submit = document.getElementById("btn_submit");

            var total = jumlah_penumpang * 200000;
            var potongan = jumlah_lansia * 20000;
            var total_bayar = total - potongan;

            total_input.value = total;
            potongan_input.value = potongan;
            total_bayar_input.value = total_bayar;
            btn_submit.removeAttribute('disabled');
        }

        function setDisabled(){
            var btn_submit = document.getElementById('btn_submit');
            btn_submit.setAttribute('disabled', 'disabled');
        }
    </script>
</body>

</html>
