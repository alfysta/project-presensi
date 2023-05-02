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
        Schema::create('ptk', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('niy_nigk')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('nrg')->nullable();
            $table->string('nuks')->nullable();
            $table->string('status_kepegawaian_id')->nullable();
            $table->string('pengawas_bidang_studi_id')->nullable();
            $table->string('agama_id')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kode_wilayah')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('no_telepon_rumah')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('status_keaktifan_id')->nullable();
            $table->string('sk_cpns')->nullable();
            $table->date('tgl_cpns')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkat_id')->nullable();
            $table->string('pangkat_golongan_id')->nullable();
            $table->string('keahlian_laboratorium_id')->nullable();
            $table->string('sumber_gaji_id')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('nama_suami_istri')->nullable();
            $table->string('nip_suami_istri')->nullable();
            $table->string('pekerjaan_suami_istri')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->string('sudah_lisensi_kepala_sekolah')->nullable();
            $table->string('jumlah_sekolah_binaan')->nullable();
            $table->string('pernah_diklat_kepengawasan')->nullable();
            $table->string('nm_wp')->nullable();
            $table->string('status_data')->nullable();
            $table->string('karpeg')->nullable();
            $table->string('karpas')->nullable();
            $table->string('mampu_handle_kk')->nullable();
            $table->string('keahlian_braille')->nullable();
            $table->string('keahlian_bhs_isyarat')->nullable();
            $table->string('kebutuhan_khusus_id')->nullable();
            $table->string('npwp')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('id_bank')->nullable();
            $table->string('rekening_bank')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->string('blob_id')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptk');
    }
};
