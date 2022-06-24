<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentalir extends Model
{
    use HasFactory;
    protected $table = 'dokumentalirs';
    protected $fillable = ['id', 'nama_pegawai', 'no_pegawai', 'email', 'dokument', 'approved'];
}