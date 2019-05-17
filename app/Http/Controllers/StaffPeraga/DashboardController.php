<?php

namespace App\Http\Controllers\StaffPeraga;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller{
     public function index()
    {
        return view('staff_peraga.index');
    }
    public function pengajuan()
    {
        return view('staff_peraga.pengajuan');
    }
}

