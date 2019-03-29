<?php

namespace App\Http\Controllers\StafTu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller{
    public function index()
    {
        return view('staf_tu.index');
    }

   	public function pegawai()
    {
        return view('staf_tu.pegawai');
    }
    public function pengunjung()
    {
        return view('staf_tu.pengunjung');
    }
}
