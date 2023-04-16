@extends('master')
@section('konten')
    <!-- Page Heading -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Table Obat</title>

        <!-- Custom fonts for this template-->
        <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    </head>
    <body>
        <h2>Data Obat</h2>

        <a class="btn btn-secondary" href="/obat/tambah">Tambah Obat</a><br><br>

        <table class="table table-striped">
        <tr>
            <th>Ubah</th>
            <th>Hapus</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tipe</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
        </tr>
        @foreach ($obat as $o )
        <tr>
            <td><a class="btn btn-warning" href="/obat/edit/{{ $o->kode }}">Edit</a></td>
            <td><a class="btn btn-danger" href="/obat/hapus/{{ $o->kode }}">Hapus</a></td>
            <td>{{ $o->kode }}</td>
            <td>{{ $o->nama }}</td>
            <td>{{ $o->deskripsi }}</td>
            <td>{{ $o->tipe }}</td>
            <td>{{ $o->jumlah }}</td>
            <td>{{ $o->harga }}</td>
        </tr>
        @endforeach
        </table>
    </body>
    </html>
@stop