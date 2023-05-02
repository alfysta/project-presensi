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
        Schema::create('peserta_didik', function (Blueprint $table) {
            $table->string('peserta_didik_id');
            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama_id')->nullable();
            $table->string('kebutuhan_khusus_id')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kode_wilayah')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('jenis_tinggal_id')->nullable();
            $table->string('alat_transportasi_id')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('anak_keberapa')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('nomor_telepon_rumah')->nullable();
            $table->string('nomor_telepon_seluler')->nullable();
            $table->string('email')->nullable();
            $table->string('penerima_kps')->nullable();
            $table->string('no_kps')->nullable();
            $table->string('layak_pip')->nullable();
            $table->string('penerima_kip')->nullable();
            $table->string('no_kip')->nullable();
            $table->string('nm_kip')->nullable();
            $table->string('no_kks')->nullable();
            $table->string('reg_akta_lahir')->nullable();
            $table->string('id_layak_pip')->nullable();
            $table->string('id_bank')->nullable();
            $table->string('rekening_bank')->nullable();
            $table->string('nama_kcp')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->string('status_data')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('tahun_lahir_ayah')->nullable();
            $table->string('jenjang_pendidikan_ayah')->nullable();
            $table->string('pekerjaan_id_ayah')->nullable();
            $table->string('penghasilan_id_ayah')->nullable();
            $table->string('kebutuhan_khusus_id_ayah')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('tahun_lahir_ibu')->nullable();
            $table->string('jenjang_pendidikan_ibu')->nullable();
            $table->string('penghasilan_id_ibu')->nullable();
            $table->string('pekerjaan_id_ibu')->nullable();
            $table->string('kebutuhan_khusus_id_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('tahun_lahir_wali')->nullable();
            $table->string('jenjang_pendidikan_wali')->nullable();
            $table->string('pekerjaan_id_wali')->nullable();
            $table->string('penghasilan_id_wali')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('pekerjaan_id')->nullable();
            $table->timestamps();
            $table->primary('peserta_didik_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_didik');
    }
};
