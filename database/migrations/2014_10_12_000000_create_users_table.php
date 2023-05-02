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
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('sekolah_id')->nullable();
            $table->string('lembaga_id')->nullable();
            $table->string('yayasan_id')->nullable();
            $table->string('la_id')->nullable();
            $table->string('dudi_id')->nullable();
            $table->string('kode_lemb_sert')->nullable();
            $table->string('peserta_didik_id')->nullable();
            $table->string('email')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('name')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nip_nim')->nullable();
            $table->string('jabatan_lembaga')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_wilayah')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('user_telegram')->nullable();
            $table->string('approval_pengguna')->nullable();
            $table->string('aktif')->nullable();
            $table->string('password')->nullable();
            $table->string('password_lama')->nullable();
            $table->date('tgl_ganti_pwd')->nullable();
            $table->string('id_sdm_pengguna')->nullable();
            $table->string('id_pd_pengguna')->nullable();
            $table->string('token_reg')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('ptk_id')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
