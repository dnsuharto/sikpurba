<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScanningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scanning', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('koleksi_id')->unsigned();
            $table->integer('pengunjung_id')->unsigned();
            $table->dateTime('waktu_kunjungan');

            $table->foreign('koleksi_id')
                  ->references('id')->on('koleksi')
                  ->onDelete('cascade');

            $table->foreign('pengunjung_id')
                  ->references('id')->on('pengunjung')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scanning');
    }
}
