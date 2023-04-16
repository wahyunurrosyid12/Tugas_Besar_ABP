<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    public  function obat()
    {
    //menggambil data dari table obat
    $obat = DB::table('obat')->get();

    //mengirim data pegawai ke view index
    // return view('index', ['obat' => $obat]);
    return response()->json([
        'obat' => $obat
    ]);
    }

    //menampilkan form tambah
    public function tambah()
    {
        return view('tambah');
    }
    //insert data ke table obat
    public function store(Request $request)
    {
        //insert data
        DB::table('obat')->insert([
            'kode'=> $request->kode,
            'nama'=> $request->nama,
            'deskripsi' => $request->deskripsi,
            'tipe'=> $request->tipe,
            'jumlah'=> $request->jumlah,
            'harga'=> $request->harga
        ]);
        // return redirect('obat');
        return response()->json([
            'Success' => 'Berhasil tambah obat'
        ]);
    }

    //edit table obat
    public function edit($id)
    {
        //mengambil data obat berdasarkan kode
        $obat = DB::table('obat')->where('kode', $id)->get();

        return view('edit', ['obat' => $obat]);
        
    }

    //update table obat
    public function update(Request $request)
    {
        DB::table('obat')->where('kode', $request->kode)->update([
            'kode'=> $request->kode,
            'nama'=> $request->nama,
            'deskripsi' => $request->deskripsi,
            'tipe'=> $request->tipe,
            'jumlah'=> $request->jumlah,
            'harga'=> $request->harga
        ]);
        // return redirect('obat');
        return response()->json([
            'Success' => 'Berhasil update obat'
        ]);
    }

    //hapus data obat
    public function hapus($id)
    {
        DB::table('obat')->where('kode', $id)->delete();

        // return redirect('/obat');
        return response()->json([
            'Success' => 'Berhasil hapus obat'
        ]);
    }
}
