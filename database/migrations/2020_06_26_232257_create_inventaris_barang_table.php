<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_barang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_bagian')->unsigned();
            $table->foreign('id_bagian')->references('id')->on('bagian')->cascadeOnDelete();
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->date('tgl_perolehan');
            $table->string('kelengkapan_dokumen');
            $table->Integer('kuantitas');
            $table->string('satuan');
            $table->string('asal');
            $table->string('kondisi');
            $table->Integer('harga');
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
        Schema::dropIfExists('inventaris_barang');
    }
}
