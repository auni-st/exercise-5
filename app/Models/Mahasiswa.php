<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table="mahasiswas";
    protected $fillable=["jurusan_id","nama","nim","jenis_kelamin", "alamat", "no_telp"];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

}
