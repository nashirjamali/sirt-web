<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamuKhususTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu_khusus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_tamu')->unsigned();
            $table->foreign('id_tamu')->references('id')->on('tamu_kunjungan')->cascadeOnDelete();
            $table->string('jabatan');
            $table->string('instansi');
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
        Schema::dropIfExists('tamu_khusus');
    }
}
