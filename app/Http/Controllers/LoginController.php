<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginDo(Request $request)
    {
	   $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $staff = Auth::user();
            if($staff->role=='staff_tu')
            	return redirect()->action('StaffTu\DashboardController@index');
            if($staff->role=='kepala_museum')
            	return redirect()->action('KepalaMuseum\DashboardController@index');
            if($staff->role=='staff_peraga')
            	return redirect()->action('StaffPeraga\DashboardController@index');
            if($staff->role=='staff_dokumen')
            	return redirect()->action('StaffDokumen\DashboardController@index');
        }

        // Posisi salah email atau password
        return redirect()->action('LoginController@login')
        	->with('msg', 'Email atau password Anda tidak tepat.')
        	->withInput(
        		$request->except('password')
        	);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->action('LoginController@login');
    }

}
