<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekruitment extends Model
{
    use HasFactory;
    protected $table = 'rekruitments';
    protected $fillable = ['id', 'nama_depan', 'nama_belakang', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'email', 'no_hp', 'lamaran_kerja', 'cv', 'foto', 'ktp', 'ijazah', 'disnaker', 'sertifikat', 'daftarpekerjaan_id'];

    public function daftarpekerjaan(){
        return $this -> BelongsTo('App\Models\Daftarpekerjaan');
    }
}
