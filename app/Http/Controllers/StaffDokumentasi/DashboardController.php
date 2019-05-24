<?php

namespace App\Http\Controllers\StaffDokumentasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Koleksi;
use App\Vertebrata;

class DashboardController extends Controller{
    public function index()
    {
    	$jumlah_total_koleksi = Koleksi::count();
    	$jumlah_vertebrata = Vertebrata::count();

        return view('staff_dokumentasi.index')
        ->with('jumlah_total_koleksi', $jumlah_total_koleksi)
        ->with('jumlah_vertebrata', $jumlah_vertebrata);
    }
}

	