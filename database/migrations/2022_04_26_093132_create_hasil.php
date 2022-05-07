<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->bigInteger('kode_mobil')->unsigned();
            $table->bigInteger('kode_kategori')->unsigned();
            $table->integer('hasil');
            $table->timestamps();
            $table->foreign('kode_mobil')->references('id')->on('mobil')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_kategori')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil');
    }
}
