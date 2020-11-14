<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKolomToDataSayurMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_sayur_masuk', function (Blueprint $table) {
            $table->bigInteger('idHargabeli')->unsigned();
            $table->foreign('idHargabeli')->references('idHargabeli')->on('hargabeli')->onDelete('cascade')->onUpdate('cascade')->after('idSayurMasuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_sayur_masuk', function (Blueprint $table) {
            //
        });
    }
}
