<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVertebrataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vertebrata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('koleksi_id')->unsigned();
            $table->string('spesies');
            $table->string('tinggi');
            $table->string('panjang');
            $table->string('berat');
            
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
        Schema::dropIfExists('vertebrata');
    }
}
