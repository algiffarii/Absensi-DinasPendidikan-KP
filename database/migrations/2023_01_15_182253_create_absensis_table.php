<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('id_absensi');
            $table->foreignId('id_pegawai')
            ->references('id_pegawai')
            ->on('pegawai')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->enum('status',
             ['Hadir', 'Pulang'])
            ->nullable();
            $table->dateTime('tanggal')
            ->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
