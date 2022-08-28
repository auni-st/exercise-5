<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::with("jurusan")->get();

        return view("mahasiswas.index", compact("mahasiswas"));
    }
    
    public function create(){
        $jurusans=Jurusan::get();
        return view("mahasiswas.create", compact("jurusans"));
    }

    public function store(Request $request){
        $mahasiswas = Mahasiswa::create([
            "jurusan_id"=>$request->jurusan_id,
            "nama"=>$request->nama,
            "nim"=>$request->nim,
            "jenis_kelamin"=>$request->jenis_kelamin,
            "alamat"=>$request->alamat,
            "no_telp"=>$request->no_telp,
        ]);

        return redirect("/");
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $jurusans = Jurusan::get();

        return view("mahasiswas.edit", compact("mahasiswa", "jurusans"));

    }

    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa ->update([
            "jurusan_id"=>$request->jurusan_id ?? $mahasiswa->jurusan_id,
            "nama"=>$request->nama ?? $mahasiswa->nama,
            "nim"=>$request->nim ?? $mahasiswa->nim,
            "jenis_kelamin"=>$request->jenis_kelamin ?? $mahasiswa->jenis_kelamin,
            "alamat"=>$request->alamat ?? $mahasiswa->alamat,
            "no_telp"=>$request->no_telp ?? $mahasiswa->no_telp,
        ]);

        return redirect("/");
    }

    public function destroy($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        
        return redirect("/");
    }

}
