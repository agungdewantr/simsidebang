<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSayurMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sayur_masuk', function (Blueprint $table) {
            $table->bigIncrements('idSayurMasuk');
            $table->enum('jenis',['Cabe','Jagung','Kol','Tomat']);
            $table->string('namaPenjual');
            $table->bigInteger('hargabeli');
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
        Schema::dropIfExists('data_sayur_masuk');
    }
}
