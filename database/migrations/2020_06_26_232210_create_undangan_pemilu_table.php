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
            $table->bigInteger('id_pemilu')->unsigned();
            $table->foreign('id_pemilu')->references('id')->on('pemilu')->cascadeOnDelete();
            $table->longText('isi');
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
