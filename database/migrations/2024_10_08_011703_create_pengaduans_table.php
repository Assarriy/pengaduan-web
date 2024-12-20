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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->dateTime('tgl_pengaduan');
            $table->char('nik', 16);
            $table->string('judul_laporan');
            $table->text('isi_laporan');
            $table->text('lokasi');
            $table->date('tgl_kejadian');
            $table->enum('kategori_kejadian', ['agama', 'hukum', 'lingkugan', 'sosial']);
            $table->string('foto');
            $table->enum('status', ['pending', 'proses', 'selesai']);

            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('masyarakats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
