<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengumumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_bagian')->unsigned();
            $table->foreign('id_bagian')->references('id')->on('bagian')->cascadeOnDelete();
            $table->string('judul_pengumuman');
            $table->longText('isi_pengumuman');
            $table->date('tgl_pengumuman');
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
        Schema::dropIfExists('pengumuman');
    }
}
