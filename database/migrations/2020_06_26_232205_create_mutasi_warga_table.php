<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutasiWargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasi_warga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_warga')->unsigned();
            $table->foreign('id_warga')->references('id')->on('warga')->cascadeOnDelete();
            $table->date('tgl_mutasi');
            $table->char('status');
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
        Schema::dropIfExists('mutasi_warga');
    }
}
