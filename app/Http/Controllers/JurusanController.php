<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    //
    public function index(){
        $jurusans = Jurusan::all();

        return view("jurusans.index", compact("jurusans"));
    }

    public function create(){
        $jurusans=Jurusan::all();
        return view("jurusans.create", compact("jurusans"));
    }

    public function store(Request $request){
        $jurusans = Jurusan::create([
            "nama"=>$request->nama,
            "desc"=>$request->desc,
        ]);

        return redirect("/");
    }

    public function edit($id){
        $jurusans = Jurusan::findOrFail($id);

        return view("jurusans.edit", compact("jurusans"));

    }

    public function update(Request $request, $id){
        $jurusans = Jurusan::findOrFail($id);
        $jurusans ->update([
            "nama"=>$request->nama ?? $jurusans->nama,
            "desc"=>$request->desc ?? $jurusans->desc,
        ]);

        return redirect("/");
    }

    public function destroy($id){
        $mahasiswa = Jurusan::findOrFail($id);
        $mahasiswa->delete();
        
        return redirect("/");
    }

}
