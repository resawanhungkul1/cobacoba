<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJumlahKasusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumlah_kasuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kode_provinsi')->unsigned();
            $table->foreign('kode_provinsi')->references('id')->on('provinsis')->onDelete('cascade');
            $table->string('t_sembuh');
            $table->string('t_positif');
            $table->string('t_meninggal');
            $table->date('tanggal');
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
        Schema::dropIfExists('jumlah_kasuses');
    }
}
