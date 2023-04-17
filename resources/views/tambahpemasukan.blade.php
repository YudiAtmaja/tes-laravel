<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>tambah pemasukan</title>
</head>

<body>
    <div class="container">
        <h1>Tambah pemasukan</h1>
        <div class="row">
            <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipe :</label>
                <a href="/tambahtransaksi/pemasukan" class="btn btn-primary">Pemasukan</a>
                <a href="/tambahtransaksi/pengeluaran" class="btn btn-outline-primary">Pengeluaran</a>
            </div> -->
            <form action="/inserttransaksi" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <div class="visually-hidden"><input type="text" name="jenis_transaksi" value="pemasukan"></div> -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipe :</label>
                    <select class="form-select" aria-label="Default select example" name="id_kategori" required>
                        @foreach ($datas as $row)
                        <option value="{{ $row->id }}">{{ $row->nama }} ({{ $row->tipe_kategori }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nominal :</label>
                    <input type="text" name="nominal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi :</label>
                    <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>