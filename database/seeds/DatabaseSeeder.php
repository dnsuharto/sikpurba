<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Employee;
use App\pengunjung;

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

    }
}
