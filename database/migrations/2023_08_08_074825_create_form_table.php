<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('name');
            $table->date('tahun_berdiri');
            $table->text('alamat_perusahaan');
            $table->string('bidang');
            $table->string('telp_perusahaan');
            $table->text('alamat_cabang');
            $table->string('telp_cabang');
            $table->bigInteger('npwp')->length(21);
            $table->integer('iup');
            $table->date('tanggal_iup');
            $table->bigInteger('siup')->length(21);
            $table->date('tanggal_siup');
            $table->text('modal_status');
            $table->string('pmdn');
            $table->string('pma');
            $table->string('asal_pma');
            $table->string('kapal_tangkap');
            $table->string('kapal_angkut');
            $table->text('kapal_pendukung');
            $table->text('wilayah_operasi');
            $table->integer('nelayan');
            $table->integer('supplier');
            $table->integer('bagan');
            $table->integer('rumpon_tidak_berizin');
            $table->integer('rumpon_berizin');
            $table->integer('jumlah_cold_storage');
            $table->string('kapasitas_cold_storage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
