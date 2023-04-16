<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //index menampilkan semua
    public function index(){
        return Siswa::all();
    }
    // index(Menyimpan data)
    public function create(request $request){
        $siswa=new Siswa;
        $siswa->nama=$request->nama;
        $siswa->alamat=$request->alamat;
        $siswa->save();

        return "Data Berhasil Masuk";
    }

    // index(update semua data)
    public function update(request $request, $id){
        $siswa->nama=$request->nama;
        $siswa->alamat=$request->alamat;

        $siswa=Siswa::find($id);
        $siswa->nama=$nama;
        $siswa->alamat=$alamat;
        $siswa->save();

        return "Data Berhasil di Update";
    }

    // index(update semua data)
    public function delete($id){
        $siswa=Siswa::find($id);
        $siswa->delete();

        return "Data Berhasil di Hapus";
    }
}
