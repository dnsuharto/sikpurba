<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Employee;
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
        
	        $employee = new Employee;
	        $employee -> email = 'staftu@sikpurba.com';
	        $employee -> nik = '3411151106';
	        $employee -> nama = 'muhammad';
	        $employee -> role = 'staf_tu';
	       	$employee -> password = bcrypt('12345');
	       	$employee -> save();
     
     		/*data input employee*/
     		

	       	
       		$employee = new Employee;
	        $employee -> email = 'stafperaga@sikpurba.com';
	        $employee -> nik = '3411151125';
	        $employee -> nama = 'nisa';
	        $employee -> role = 'staf_peraga';
	       	$employee -> password = bcrypt('12345');
	       	$employee -> save();

	       	$employee = new Employee;
	        $employee -> email = 'stafdokumen@sikpurba.com';
	        $employee -> nik = '3411151185';
	        $employee -> nama = 'bambang';
	        $employee -> role = 'staf_dokumen';
	       	$employee -> password = bcrypt('12345');
	       	$employee -> save();

	       	$employee = new Employee;
	        $employee -> email = 'kepalamuseum@sikpurba.com';
	        $employee -> nik = '3411151145';
	        $employee -> nama = 'agus';
	        $employee -> role = 'kepala_museum';
	       	$employee -> password = bcrypt('12345');
	       	$employee -> save();
	       	

	       	/*Data Koleksi*/
	       	$koleksi = new Koleksi;
	       	$koleksi->nomor_koleksi = 'A123';
	       	$koleksi->nama_benda = 'Batu Kecubung';
	       	$koleksi->jenis_benda = 'batuan';
	       	$koleksi->asal_benda = 'Pangkalan Bun';
	       	$koleksi->tgl_ditemukan = '2018-05-24';
	       	$koleksi->usia = '600';
	       	$koleksi->penemu = 'Tim Geologi';

	       	$koleksi = new Koleksi;
	       	$koleksi->nomor_koleksi = 'B123';
	       	$koleksi->nama_benda = 'Tulang Belikat Homosafiens';
	       	$koleksi->jenis_benda = 'fosil';
	       	$koleksi->asal_benda = 'Ujungpandang';
	       	$koleksi->tgl_ditemukan = '2012-03-10';
	       	$koleksi->usia = '1500';
	       	$koleksi->penemu = 'Noval';

	       	$koleksi = new Koleksi;
	       	$koleksi->nomor_koleksi = 'C123';
	       	$koleksi->nama_benda = 'Etanol';
	       	$koleksi->jenis_benda = 'lainnya';
	       	$koleksi->asal_benda = 'Palembang';
	       	$koleksi->tgl_ditemukan = '2010-12-03';
	       	$koleksi->usia = '';
	       	$koleksi->penemu = 'Noval';

    }
}
