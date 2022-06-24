<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekruitments', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->text('alamat');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('ktp');
            $table->string('ijazah');
            $table->string('lamaran_kerja');
            $table->string('cv');
            $table->string('foto');
            $table->string('disnaker');
            $table->string('sertifikat');
            $table->foreignId('daftarpekerjaan_id')->constrained('daftarpekerjaans')->onDelete('restrict')->onUpdate('restrict');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekruitments');
    }
};
