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
        Schema::create('dokumentalirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->string('no_pegawai');
            $table->string('email')->unique();
            $table->string('dokument');
            $table->enum('approved', ['setuju', 'tidak setuju']);
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
        Schema::dropIfExists('dokumentalirs');
    }
};