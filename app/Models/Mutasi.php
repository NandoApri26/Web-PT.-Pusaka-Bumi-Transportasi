<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mutasi extends Model
{
    use HasFactory;
    protected $table = 'mutasis';
    protected $fillable = ['id', 'nama_pegawai', 'no_pegawai', 'tanggal_mutasi', 'tanggal_promosi', 'alasan_promosi', 'alasan_mutasi', 'jabatan_lama', 'jabatan_baru', 'site_project', 'departement_id'];

    public function departement(){
        return $this -> BelongsTo('App\Models\Departement');
    }
}
