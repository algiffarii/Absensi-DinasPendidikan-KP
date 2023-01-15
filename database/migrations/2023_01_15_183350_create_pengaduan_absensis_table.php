<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan_absensi', function (Blueprint $table) {
            $table->id('id_pengaduan_absensi');

            $table->foreignId('id_pegawai')
            ->references('id_pegawai')
            ->on('pegawai')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            $table->foreignId('id_admin')
            ->nullable()
            ->references('id_admin')
            ->on('admin')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            
            $table->date('tanggal_absensi');
            $table->text('keterangan_pengaduan');
            $table->enum('status_pengaduan', ['Diajukan', 'Ditolak', 'Diterima'])
            ->default('Diajukan');
            $table->text('keterangan_admin')
            ->nullable();
            $table->dateTime('tanggal_pengaduan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan_absensi');
    }
}
