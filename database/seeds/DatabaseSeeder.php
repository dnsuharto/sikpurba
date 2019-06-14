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
	       	

    }
}
