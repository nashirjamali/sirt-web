<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisAtkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_atk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_bagian')->unsigned();
            $table->foreign('id_bagian')->references('id')->on('bagian')->cascadeOnDelete();
            $table->string('kode_atk');
            $table->string('nama_atk');
            $table->date('tgl_dimiliki');
            $table->string('kelengkapan_dokumen');
            $table->string('asal');
            $table->integer('jumlah');
            $table->longText('keterangan');
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
        Schema::dropIfExists('inventaris_atk');
    }
}
