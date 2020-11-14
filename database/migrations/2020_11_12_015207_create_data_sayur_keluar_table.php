<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSayurKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sayur_keluar', function (Blueprint $table) {
            $table->bigIncrements('idSayurKeluar');
            $table->bigInteger('idHargajual')->unsigned();
            $table->foreign('idHargajual')->references('idHargajual')->on('hargajual')->onDelete('cascade')->onUpdate('cascade');
            $table->string('namaPenerima');
            $table->string('kotaTujuan');
            $table->string('namaSopir');
            $table->string('notelpSopir')->nullable();
            $table->bigInteger('hargajual');
            $table->bigInteger('jumlah');
            $table->bigInteger('totalHarga');
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
        Schema::dropIfExists('data_sayur_keluar');
    }
}
