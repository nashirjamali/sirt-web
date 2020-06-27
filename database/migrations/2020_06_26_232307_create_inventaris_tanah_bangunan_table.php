<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTanahBangunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_tanah_bangunan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_bagian')->unsigned();
            $table->foreign('id_bagian')->references('id')->on('bagian')->cascadeOnDelete();
            $table->char('kode_tanah');
            $table->date('tgl_dimiliki');
            $table->string('asal');
            $table->string('kelengkapan_dokumen');
            $table->string('alamat');
            $table->integer('luas');
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
        Schema::dropIfExists('inventaris_tanah_bangunan');
    }
}
