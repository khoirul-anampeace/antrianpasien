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
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('kode_registrasi')->unique();
            $table->string('no_antrian');
            $table->string('nik',);
            $table->string('kode_poli', 6);
            $table->string('kode_dokter', 6);
            $table->string('kode_pembayaran', 6);
            $table->date('tanggal_booking');
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
        Schema::dropIfExists('book');
    }
};
