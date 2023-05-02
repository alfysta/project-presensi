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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->string('sekolah_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('nama_nomenklatur')->nullable();
            $table->string('nss')->nullable();
            $table->string('npsn')->nullable();
            $table->string('bentuk_pendidikan_id')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kode_wilayah')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('nomor_fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('kebutuhan_khusus_id')->nullable();
            $table->string('status_sekolah')->nullable();
            $table->string('sk_pendirian_sekolah')->nullable();
            $table->date('tanggal_sk_pendirian')->nullable();
            $table->string('status_kepemilikan_id')->nullable();
            $table->string('yayasan_id')->nullable();
            $table->string('sk_izin_operasional')->nullable();
            $table->date('tanggal_sk_izin_operasional')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('cabang_kcp_unit')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->string('mbs')->nullable();
            $table->string('luas_tanah_milik')->nullable();
            $table->string('luas_tanah_bukan_milik')->nullable();
            $table->string('kode_registrasi')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nm_wp')->nullable();
            $table->string('keaktifan')->nullable();
            $table->string('flag')->nullable();
            $table->timestamps();
            $table->primary('sekolah_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
