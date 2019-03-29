<?php

namespace App\Http\Controllers\StafDokumen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller{
     public function index()
    {
        return view('staf_dokumen.index');
    }
}

