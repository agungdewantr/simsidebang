<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHargajualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hargajual', function (Blueprint $table) {
          $table->bigIncrements('idHargajual');
          $table->enum('jenis',['Cabe','Jagung','Kol','Tomat']);
          $table->bigInteger('harga');
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
        Schema::dropIfExists('hargajual');
    }
}
