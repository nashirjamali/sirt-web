<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukSementaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk_sementara', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_warga')->unsigned();
            $table->foreign('id_warga')->references('id')->on('warga')->cascadeOnDelete();
            $table->bigInteger('war_id_warga')->unsigned();
            $table->foreign('war_id_warga')->references('id')->on('warga')->cascadeOnDelete();
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
        Schema::dropIfExists('penduduk_sementara');
    }
}
