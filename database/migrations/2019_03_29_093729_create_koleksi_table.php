<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKoleksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koleksi', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('gambar_koleksi');
            $table->string('no_koleksi', 30)->unique();
            $table->string('nama_koleksi');
            $table->enum('jenis_koleksi',['batuan','fosil','lainnya']);
            $table->string('asal_koleksi');
            $table->date('tgl_ditemukan');
            $table->integer('usia')->nullable();
            $table->string('penemu');
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
        Schema::dropIfExists('koleksi');
    }
}
