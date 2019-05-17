<?php

namespace App\Http\Controllers\StaffDokumen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller{
    public function index()
    {
        return view('staff_dokumen.index');
    }
}

