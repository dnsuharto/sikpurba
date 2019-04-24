<?php

namespace App\Http\Controllers\StaffDokumen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller{
    public function index()
    {
        return view('staf_dokumen.index');
    }
    public function koleksi()
    {
        return view('staf_dokumen.koleksi');
    }
}

