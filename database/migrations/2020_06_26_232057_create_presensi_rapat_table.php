<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiRapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi_rapat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_rapat')->unsigned();
            $table->foreign('id_rapat')->references('id')->on('rapat')->cascadeOnDelete();
            $table->string('kehadiran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi_rapat');
    }
}
