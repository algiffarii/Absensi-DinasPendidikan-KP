<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenAbsensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_absensi', function (Blueprint $table) {
            $table->id("id_token_absensi");
            $table->foreignId('id_admin')
                ->references('id_admin')
                ->on('admin')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->text("token_absensi");
            $table->dateTime("tanggal_dibuat")
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
        Schema::dropIfExists('token_absensi');
    }
}
