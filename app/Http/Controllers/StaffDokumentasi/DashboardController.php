<?php

namespace App\Http\Controllers\StaffDokumentasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Koleksi;
use App\Vertebrata;
use App\Batuan;
use App\Mollusca;
use App\Artefak;
class DashboardController extends Controller{
    public function index()
    {
    	$jumlah_total_koleksi = Koleksi::count();
    	$jumlah_vertebrata = Vertebrata::count();
    	$jumlah_batuan = Batuan::count();
    	$jumlah_mollusca = Mollusca::count();
    	$jumlah_artefak = Artefak::count();

        return view('staff_dokumentasi.index')
        ->with('jumlah_total_koleksi', $jumlah_total_koleksi)
        ->with('jumlah_vertebrata', $jumlah_vertebrata)
        ->with('jumlah_batuan', $jumlah_batuan)
        ->with('jumlah_mollusca', $jumlah_mollusca)
        ->with('jumlah_artefak', $jumlah_artefak);
    }
}

	