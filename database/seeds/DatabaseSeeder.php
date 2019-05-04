<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Staff;
use App\pengunjung;
use App\Koleksi;


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
	        $staff -> email = 'staffperaga1@sikpurba.com';
	        $staff -> nik = '3411151125';
	        $staff -> nama = 'nisa';
	        $staff -> role = 'staff_peraga';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();

	       	$staff = new Staff;
	        $staff -> email = 'staffperaga2@sikpurba.com';
	        $staff -> nik = '3411151120';
	        $staff -> nama = 'mela';
	        $staff -> role = 'staff_peraga';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();

	       	/*data staff*/
	       	$staff = new Staff;
	        $staff -> email = 'staffdokumen@sikpurba.com';
	        $staff -> nik = '3411151185';
	        $staff -> nama = 'bambang';
	        $staff -> role = 'staff_dokumen';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();

	       	$staff = new Staff;
	        $staff -> email = 'kepalamuseum@sikpurba.com';
	        $staff -> nik = '3411151145';
	        $staff -> nama = 'agus';
	        $staff -> role = 'kepala_museum';
	       	$staff -> password = bcrypt('12345');
	       	$staff -> save();
	       	

	       	/*Data Koleksi*/
	       	$koleksi = new Koleksi;
	       	$koleksi->gambar_koleksi = '';
	       	$koleksi->no_koleksi = 'A123';
	       	$koleksi->nama_koleksi = 'Batu Kecubung';
	       	$koleksi->jenis_koleksi = 'batuan';
	       	$koleksi->asal_koleksi = 'Pangkalan Bun';
	       	$koleksi->tgl_ditemukan = '2018-05-24';
	       	$koleksi->usia = 600;
	       	$koleksi->penemu = 'Tim Geologi';
	       	$koleksi -> save();

	       	$koleksi = new Koleksi;
	       	$koleksi->gambar_koleksi = '';
	       	$koleksi->no_koleksi = 'B123';
	       	$koleksi->nama_koleksi = 'Tulang Belikat Homosafiens';
	       	$koleksi->jenis_koleksi = 'fosil';
	       	$koleksi->asal_koleksi = 'Ujungpandang';
	       	$koleksi->tgl_ditemukan = '2012-03-10';
	       	$koleksi->usia = 1500;
	       	$koleksi->penemu = 'Noval';
	       	$koleksi -> save();

	       	$koleksi = new Koleksi;
	       	$koleksi->gambar_koleksi = '';
	       	$koleksi->no_koleksi = 'C123';
	       	$koleksi->nama_koleksi = 'Etanol';
	       	$koleksi->jenis_koleksi = 'lainnya';
	       	$koleksi->asal_koleksi = 'Palembang';
	       	$koleksi->tgl_ditemukan = '2010-12-03';
	       	$koleksi->penemu = 'Noval';
	       	$koleksi -> save();

    }
}
