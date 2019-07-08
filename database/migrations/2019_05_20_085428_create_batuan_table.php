<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('koleksi_id')->unsigned();
            $table->string('tinggi');
            $table->string('panjang');
            $table->string('berat');
            $table->string('warna');
            $table->string('rumus_kimia');
            $table->string('skala_kekerasan');
            $table->string('titik_lebur');
            $table->timestamps();

            $table->foreign('koleksi_id')
                  ->references('id')->on('koleksi')
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
        Schema::dropIfExists('batuan');
    }
}
