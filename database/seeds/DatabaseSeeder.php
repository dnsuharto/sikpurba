<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Staff;
use App\pengunjung;
use App\Koleksi;
use App\Vertebrata;
use App\Mollusca;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
	        $staff = new Staff;
	        $staff -> email = 'stafftu@sikpurba.com';
	        $staff -> nik = '3411151106';
	        $staff -> nama = 'muhammad';
	        $staff -> role = 'staff_tu';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();
     
     		/*data input staff*/

     		/*data  staff peraga*/
       		$staff = new Staff;
	        $staff -> email = 'staffperagaan@sikpurba.com';
	        $staff -> nik = '3411151125';
	        $staff -> nama = 'nisa';
	        $staff -> role = 'staff_peragaan';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();

	       	$staff = new Staff;
	        $staff -> email = 'staffperagaan1@sikpurba.com';
	        $staff -> nik = '3411151120';
	        $staff -> nama = 'mela';
	        $staff -> role = 'staff_peragaan';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();

	       	/*data staff*/
	       	$staff = new Staff;
	        $staff -> email = 'staffdokumentasi@sikpurba.com';
	        $staff -> nik = '3411151185';
	        $staff -> nama = 'bambang';
	        $staff -> role = 'staff_dokumentasi';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();

	       	$staff = new Staff;
	        $staff -> email = 'kepalamuseum@sikpurba.com';
	        $staff -> nik = '3411151145';
	        $staff -> nama = 'agus';
	        $staff -> role = 'kepala_museum';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();
	       	
	       	/*data koleksi*/
	       	/*
	       	$koleksi = new Koleksi;
	       	$koleksi -> no_koleksi = 'A123';
	       	$koleksi -> nama_ilmiah = 'Nama Ilmiah 1';
	       	$koleksi -> nama_umum	= 'Nama Umum 1';
	       	$koleksi -> jenis_koleksi = 'batuan';
	       	$koleksi -> asal_koleksi = 'Bandung';
	       	$koleksi -> tgl_ditemukan = '02-02-2019';
	       	$koleksi -> usia = '245';
	       	$koleksi -> status = 'nonperaga';
	       	$koleksi -> status_pengajuan = 'belum';
	       	$koleksi -> deskripsi = 'deskripsi benda koleksi purbakala';
	       	$koleksi -> save();
	       	$batuan = new Batuan;
	       	$batuan -> koleksi_id = $koleksi -> id ;
	       	$batuan -> tinggi = '25 mm';
	       	$batuan -> panjang = '10 mm';
	       	$batuan -> berat = '30 mg';
	       	$batuan -> warna ='violet';
	       	$batuan -> rumus_kimiea = 'H2SO4';
	       	$batuan -> skala_kekerasan = '3';
	       	$batuan -> titik_lebur = '200 derajat C';
	       	$batuan -> save;
	       	*/
    }
}
