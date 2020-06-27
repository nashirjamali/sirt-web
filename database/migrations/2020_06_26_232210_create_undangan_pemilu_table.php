<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndanganPemiluTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangan_pemilu', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_warga')->unsigned();
            $table->foreign('id_warga')->references('id')->on('warga')->cascadeOnDelete();
            $table->bigInteger('id_bagian')->unsigned();
            $table->foreign('id_bagian')->references('id')->on('bagian')->cascadeOnDelete();
            $table->string('periode');
            $table->date('tgl_pemilu');
            $table->string('tempat_pemilu');
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
        Schema::dropIfExists('undangan_pemilu');
    }
}
