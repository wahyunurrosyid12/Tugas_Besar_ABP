<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Edit Obat</title>

        <!-- Custom fonts for this template-->
        <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    </head>
<body>
    <a href="/obat">Kembali</a> <br><br>

    @foreach ($obat as $o)
    <form action="/obat/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $o->kode }}"><br>
        Kode <input type="text" name="kode" required="required" value="{{ $o->kode }}"> <br>
        Nama <input type="text" name="nama" required="required" value="{{ $o->nama }}"> <br>
        Deskripsi <input type="text" name="deskripsi" required="required" value="{{ $o->deskripsi }}"> <br>
        Tipe <input type="text" name="tipe" required="required" value="{{ $o->tipe }}"> <br>
        Jumlah <input type="number" name="jumlah" required="required" value="{{ $o->jumlah }}"> <br>
        Harga <input type="number" name="harga" required="required" value="{{ $o->harga }}"> <br>
        <input type="submit" value="Simpan Obat">
    </form>
    @endforeach
    
</body>
</html>