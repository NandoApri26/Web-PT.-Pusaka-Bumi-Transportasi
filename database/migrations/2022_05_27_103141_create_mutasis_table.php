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
        Schema::create('mutasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->string('no_pegawai');
            $table->string('tanggal_promosi');
            $table->string('tanggal_mutasi');
            $table->string('alasan_promosi');
            $table->string('alasan_mutasi');
            $table->string('jabatan_lama');
            $table->string('jabatan_baru');
            $table->foreignId('departement_id')->constrained('departements')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('mutasis');
    }
};
