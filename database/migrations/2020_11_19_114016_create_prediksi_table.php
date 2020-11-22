<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrediksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prediksi', function (Blueprint $table) {
            $table->bigIncrements('idprediksi');
            $table->bigInteger('idSayurKeluar')->unsigned();
            $table->foreign('idSayurkeluar')->references('idSayurKeluar')->on('data_sayur_keluar')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jenis');
            $table->bigInteger('dataBulanPertama');
            $table->bigInteger('dataBulanKedua');
            $table->bigInteger('dataBulanKetiga');
            $table->bigInteger('bulanPrediksi');
            $table->bigInteger('tahunPrediksi');
            $table->bigInteger('hasilPrediksi');
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
        Schema::dropIfExists('prediksi');
    }
}
