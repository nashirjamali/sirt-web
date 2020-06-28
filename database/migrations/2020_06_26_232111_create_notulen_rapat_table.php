<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotulenRapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notulen_rapat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_rapat')->unsigned();
            $table->foreign('id_rapat')->references('id')->on('rapat')->cascadeOnDelete();
            $table->longText('isi_notulen');
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
        Schema::dropIfExists('notulen_rapat');
    }
}
