<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMolluscaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mollusca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('koleksi_id')->unsigned(); 
            $table->enum('kelas',['aplacopora','scapopoda', 'polyplacophora', 'gastropoda','bivalvia','cephalopoda']);
            $table->string('ukuran');
            $table->string('bentuk');
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
        Schema::dropIfExists('mollusca');
    }
}
