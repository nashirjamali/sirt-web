<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengumuman2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman2', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_warga')->unsigned();
            $table->foreign('id_warga')->references('id')->on('warga')->cascadeOnDelete();
            $table->bigInteger('id_pengumuman')->unsigned();
            $table->foreign('id_pengumuman')->references('id')->on('pengumuman')->cascadeOnDelete();
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
        Schema::dropIfExists('pengumuman2');
    }
}
