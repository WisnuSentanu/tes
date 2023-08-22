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
        Schema::create('cutis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai', 50);
            $table->date('tgl_mulai')->default(date('Y-m-d'));
            $table->integer('jumlah_hari')->default(11);
            $table->string('tipe_cuti', 30);
            $table->date('tgl_selesai')->default(date('Y-m-d'));
            $table->text('keterangan');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
