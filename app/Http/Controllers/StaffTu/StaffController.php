<?php

namespace App\Http\Controllers\StaffTu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::get();
    
        return view('staff_tu.staff.index')->with('staffs', $staffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff_tu.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'email' => 'required|email|unique:staffs|max:255',
        'nik' => 'required|numeric',
        'nama' => 'required'
        ],
        [
        'email.required' => 'Email tidak boleh kosong',
        'email.email' => 'Email harus sesuai dengan format',
        'email.unique' => 'Email sudah terdaftar',
        'email.max' => 'Email terlalu panjang',
        'nik.required' => 'NIK tidak boleh kosong',
        'nik.numeric' => 'NIK harus angka',
        'nama.required' => 'Nama tidak boleh kosong'
        ]);

        $staff = new Staff;
        $staff -> email = $request->input('email');
        $staff -> nik = $request->input('nik');
        $staff -> nama = $request->input('nama');
        $staff -> role = $request->input('role');
        $staff -> password = bcrypt('12345');
        $staff -> save();

         return redirect()->action('StaffTu\StaffController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
