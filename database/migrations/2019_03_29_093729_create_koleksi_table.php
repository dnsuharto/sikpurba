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
            $table->string('nama_ilmiah');
            $table->string('nama_umum');
            $table->enum('jenis_koleksi',['batuan','vertebrata','mollusca','artefak']);
            $table->string('asal_koleksi');
            $table->date('tgl_ditemukan');
            $table->integer('usia')->nullable();
            $table->string('penemu');
            $table->enum('status',['nonperaga','peraga']);
            $table->enum('status_pengajuan',['belum','sedang','telah']);
            $table->string('deskripsi')->nullable();
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
