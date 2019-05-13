<?php

namespace App\Http\Controllers\StaffDokumen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Koleksi;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koleksis = Koleksi::paginate(10);
        
        return view('staff_dokumen.koleksi.index')->with('koleksis', $koleksis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff_dokumen.koleksi.create');
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
        'no_koleksi' => 'required|unique:koleksi',
        'nama_koleksi' => 'required',
        'asal_koleksi' => 'required',
        'tgl_ditemukan' => 'required|before:tomorrow',
        'usia' => 'required',
        'gambar_koleksi' =>'required|image',
        'penemu' =>'required|alpha'
        ],
        [
        'no_koleksi.required' => 'no koleksi tidak boleh kosong',
        'no_koleksi.unique' => 'no koleksi telah terdaftar',
        'nama_koleksi.required' => 'Nama tidak boleh kosong',
        'asal_koleksi.required' => 'Asal tidak boleh kosong',
        'tgl_ditemukan.required' => 'Tanggal tidak boleh kosong',
        'tgl_ditemukan.before' => 'Tanggal tidak boleh lebih dari hari ini',
        'usia.required' => 'usia tidak boleh kosong',
        'penemu.required' => 'penemu tidak boleh kosong',
        'penemu.alpha' => 'Nama penemu harus alphabet',
        'gambar_koleksi.image' => 'Gambar tidak boleh kosong',
        ]);

        $koleksi = new koleksi;
        $koleksi -> no_koleksi = $request->input('no_koleksi');
        $koleksi -> nama_koleksi = $request->input('nama_koleksi');
        $koleksi -> jenis_koleksi = $request->input('jenis_koleksi');
        $koleksi -> asal_koleksi = $request->input('asal_koleksi');
        $koleksi -> tgl_ditemukan = $request->input('tgl_ditemukan');
        $koleksi -> usia = $request->input('usia');
        $koleksi -> penemu = $request->input('penemu');
        $koleksi -> gambar_koleksi = $request->input('gambar_koleksi');
        $koleksi -> status = $request->input('status');
        $koleksi -> status_pengajuan = $request->input('status_pengajuan');
        $koleksi -> save();

         return redirect()->action('StaffDokumen\KoleksiController@index')->with('msg', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $koleksi = Koleksi::find($id);
        
        return view('staff_dokumen.koleksi.show')->with('koleksi', $koleksi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $koleksi = Koleksi::find($id);

        return view('staff_dokumen.koleksi.edit')->with('koleksi', $koleksi);
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
        /*
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
        ]);*/

        $koleksi = Koleksi::find($id);
        $koleksi -> no_koleksi = $request->input('no_koleksi');
        $koleksi -> nama_koleksi = $request->input('nama_koleksi');
        $koleksi -> jenis_koleksi = $request->input('jenis_koleksi');
        $koleksi -> asal_koleksi = $request->input('asal_koleksi');
        $koleksi -> tgl_ditemukan = $request->input('tgl_koleksi');
        $koleksi -> usia = $request->input('usia');
        $koleksi -> penemu = $request->input('penemu');
        $koleksi -> gambar_koleksi = $request->input('gambar_koleksi');
        $koleksi -> save();

         return redirect()->action('StaffDokumen\KoleksiController@index')->with('msg', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $koleksi = Koleksi::find($id);
        $koleksi->delete(); 

        return redirect()->action('StaffDokumen\KoleksiController@index')->with('msg', 'Data berhasil dihapus');

    }
}
