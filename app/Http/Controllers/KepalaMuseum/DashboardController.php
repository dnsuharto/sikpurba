<?php

namespace App\Http\Controllers\KepalaMuseum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
     public function index()
    {
        return view('kepala_museum.index');
    }
}

