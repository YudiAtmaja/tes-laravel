<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>transaksi</title>
</head>

<body>
    <div class="container">
        <h1>Transaksi</h1>
        <a href="/tambahtransaksi" class="btn btn-success mb-2">Tambah +</a>
        <a href="/kategori" class="btn btn-success mb-2">Tambah jenis_transaksi</a>
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenis Transaksi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp

                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{ $row->kategori->nama }}</td>
                        <td>{{ $row->kategori->tipe_kategori }}</td>
                        <td>{{ $row->nominal }}</td>
                        <td>{{ $row->deskripsi }}</td>
                        <td>
                            <a href="/tampiltransaksi/{{ $row->id }}" class="btn btn-primary mb-1">Edit</a>
                            <a href="/deletetransaksi/{{ $row->id }}" class="btn btn-danger delete mb-1" data-id="{{ $row->id }}">Hapus</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>