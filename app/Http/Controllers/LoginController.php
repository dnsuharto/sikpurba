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
            $employee = Auth::user();
            if($employee->role=='staf_tu')
            	return redirect()->action('StafTu\DashboardController@index');
            if($employee->role=='kepala_museum')
            	return redirect()->action('KepalaMuseum\DashboardController@index');
            if($employee->role=='staf_peraga')
            	return redirect()->action('StafPeraga\DashboardController@index');
            if($employee->role=='staf_dokumen')
            	return redirect()->action('StafDokumen\DashboardController@index');
        }

        // Posisi salah email atau password
        return redirect()->action('LoginController@login')
        	->with('msg', 'Email atau Passwod Anda Salah')
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
