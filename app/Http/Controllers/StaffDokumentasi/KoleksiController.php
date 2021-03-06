<?php

namespace App\Http\Controllers\StaffDokumentasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Koleksi;
use App\Mollusca;
use App\Batuan;
use App\Vertebrata;
use App\Artefak;
use Image;
use Storage;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jenis_koleksi = $request->input('jenis_koleksi');

        $koleksis = Koleksi::where('jenis_koleksi', $jenis_koleksi)->paginate(3);

        if ($jenis_koleksi=='vertebrata')
            return view('staff_dokumentasi.koleksi.vertebrata.index')->with('koleksis', $koleksis)->with('jenis_koleksi', $jenis_koleksi);
        if ($jenis_koleksi=='batuan')
            return view('staff_dokumentasi.koleksi.batuan.index')->with('koleksis', $koleksis)->with('jenis_koleksi', $jenis_koleksi);
        if ($jenis_koleksi=='artefak')
            return view('staff_dokumentasi.koleksi.artefak.index')->with('koleksis', $koleksis)->with('jenis_koleksi', $jenis_koleksi);
        if ($jenis_koleksi=='mollusca')
            return view('staff_dokumentasi.koleksi.mollusca.index')->with('koleksis', $koleksis)->with('jenis_koleksi', $jenis_koleksi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $jenis_koleksi = $request->input('jenis_koleksi');

        return view('staff_dokumentasi.koleksi.create')->with('jenis_koleksi', $jenis_koleksi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis_koleksi = $request->input('jenis_koleksi');
        
        if ($jenis_koleksi=='vertebrata'){

        $validatedData = $request->validate([
        'no_koleksi' => 'required|unique:koleksi',
        'nama_ilmiah' => 'required',
        'asal_koleksi' => 'required',
        'tgl_ditemukan' => 'required|before:tomorrow',
        'gambar_koleksi' =>'required' ,
        'penemu' =>'required|alpha'
        ],
        [
        'no_koleksi.required' => 'no koleksi tidak boleh kosong',
        'no_koleksi.unique' => 'no koleksi telah terdaftar',
        'nama_ilmiah.required' => 'Nama tidak boleh kosong',
        'asal_koleksi.required' => 'Asal tidak boleh kosong',
        'tgl_ditemukan.required' => 'Tanggal tidak boleh kosong',
        'tgl_ditemukan.before' => 'Tanggal tidak boleh lebih dari hari ini',
        'penemu.required' => 'penemu tidak boleh kosong',
        'penemu.alpha' => 'Nama penemu harus alphabet',
        'gambar_koleksi.required' => 'Gambar tidak boleh kosong',
        ]);

        $koleksi = new koleksi;
        $koleksi -> no_koleksi = $request->input('no_koleksi');
        $koleksi -> nama_ilmiah = $request->input('nama_ilmiah');
        $koleksi -> nama_umum = $request->input('nama_umum');
        $koleksi -> jenis_koleksi = $request->input('jenis_koleksi');
        $koleksi -> asal_koleksi = $request->input('asal_koleksi');
        $koleksi -> tgl_ditemukan = $request->input('tgl_ditemukan');
        $koleksi -> usia = $request->input('usia');
        $koleksi -> penemu = $request->input('penemu');
        $koleksi -> status = 'nonperaga';
        $koleksi -> status_pengajuan = 'belum';
        $koleksi -> deskripsi = $request-> input('deskripsi');
        $filename ='koleksi_'.time().rand(1000,9999).'.jpg';
        Image::make($request->file('gambar_koleksi'))->save( storage_path('app/public/koleksi/'.$filename), 100);
        Image::make($request->file('gambar_koleksi'))->fit(100, 100)->save( storage_path('app/public/koleksi/thumb/'.$filename), 100);
        $koleksi-> gambar_koleksi = $filename;
        $koleksi -> save();

        $vertebrata = new Vertebrata;
        $vertebrata -> koleksi_id = $koleksi->id;
        $vertebrata -> spesies = $request->input('spesies');
        $vertebrata -> tinggi = $request->input('tinggi');
        $vertebrata -> panjang = $request->input('panjang');
        $vertebrata -> berat = $request->input('berat');
        $vertebrata -> save();
     }

          if ($jenis_koleksi=='batuan'){
        $validatedData = $request->validate([
        'no_koleksi' => 'required|unique:koleksi',
        'nama_ilmiah' => 'required',
        'asal_koleksi' => 'required',
        'tgl_ditemukan' => 'required|before:tomorrow',
        'gambar_koleksi' =>'required' ,
        'penemu' =>'required|alpha'
        ],
        [
        'no_koleksi.required' => 'no koleksi tidak boleh kosong',
        'no_koleksi.unique' => 'no koleksi telah terdaftar',
        'nama_ilmiah.required' => 'Nama tidak boleh kosong',
        'asal_koleksi.required' => 'Asal tidak boleh kosong',
        'tgl_ditemukan.required' => 'Tanggal tidak boleh kosong',
        'tgl_ditemukan.before' => 'Tanggal tidak boleh lebih dari hari ini',
        'penemu.required' => 'penemu tidak boleh kosong',
        'penemu.alpha' => 'Nama penemu harus alphabet',
        'gambar_koleksi.required' => 'Gambar tidak boleh kosong',
        ]);

        $koleksi = new koleksi;
        $koleksi -> no_koleksi = $request->input('no_koleksi');
        $koleksi -> nama_ilmiah = $request->input('nama_ilmiah');
        $koleksi -> nama_umum = $request->input('nama_umum');
        $koleksi -> jenis_koleksi = $request->input('jenis_koleksi');
        $koleksi -> asal_koleksi = $request->input('asal_koleksi');
        $koleksi -> tgl_ditemukan = $request->input('tgl_ditemukan');
        $koleksi -> usia = $request->input('usia');
        $koleksi -> penemu = $request->input('penemu');
        $koleksi -> status = 'nonperaga';
        $koleksi -> status_pengajuan = 'belum';
        $koleksi -> deskripsi = $request-> input('deskripsi');
        $filename ='koleksi_'.time().rand(1000,9999).'.jpg';
        Image::make($request->file('gambar_koleksi'))->save( storage_path('app/public/koleksi/'.$filename), 100);
        Image::make($request->file('gambar_koleksi'))->fit(100, 100)->save( storage_path('app/public/koleksi/thumb/'.$filename), 100);
        $koleksi-> gambar_koleksi = $filename;
        $koleksi -> save();

        $batuan = new Batuan;
        $batuan -> koleksi_id = $koleksi->id;
        $batuan -> warna = $request->input('warna');
        $batuan -> tinggi = $request->input('tinggi');
        $batuan -> panjang = $request->input('panjang');
        $batuan -> berat = $request->input('berat');
        $batuan -> rumus_kimia = $request->input('rumus_kimia');
        $batuan -> skala_kekerasan = $request->input('skala_kekerasan');
        $batuan -> titik_lebur = $request->input('titik_lebur');
        $batuan -> save();
     }
         if ($jenis_koleksi=='artefak'){
        $validatedData = $request->validate([
        'no_koleksi' => 'required|unique:koleksi',
        'nama_ilmiah' => 'required',
        'asal_koleksi' => 'required',
        'tgl_ditemukan' => 'required|before:tomorrow',
        'gambar_koleksi' =>'required' ,
        'penemu' =>'required|alpha'
        ],
        [
        'no_koleksi.required' => 'no koleksi tidak boleh kosong',
        'no_koleksi.unique' => 'no koleksi telah terdaftar',
        'nama_ilmiah.required' => 'Nama tidak boleh kosong',
        'asal_koleksi.required' => 'Asal tidak boleh kosong',
        'tgl_ditemukan.required' => 'Tanggal tidak boleh kosong',
        'tgl_ditemukan.before' => 'Tanggal tidak boleh lebih dari hari ini',
        'penemu.required' => 'penemu tidak boleh kosong',
        'penemu.alpha' => 'Nama penemu harus alphabet',
        'gambar_koleksi.required' => 'Gambar tidak boleh kosong',
        ]);

        $koleksi = new koleksi;
        $koleksi -> no_koleksi = $request->input('no_koleksi');
        $koleksi -> nama_ilmiah = $request->input('nama_ilmiah');
        $koleksi -> nama_umum = $request->input('nama_umum');
        $koleksi -> jenis_koleksi = $request->input('jenis_koleksi');
        $koleksi -> asal_koleksi = $request->input('asal_koleksi');
        $koleksi -> tgl_ditemukan = $request->input('tgl_ditemukan');
        $koleksi -> usia = $request->input('usia');
        $koleksi -> penemu = $request->input('penemu');
        $koleksi -> status = 'nonperaga';
        $koleksi -> status_pengajuan = 'belum';
        $koleksi -> deskripsi = $request-> input('deskripsi');
        $filename ='koleksi_'.time().rand(1000,9999).'.jpg';
        Image::make($request->file('gambar_koleksi'))->save( storage_path('app/public/koleksi/'.$filename), 100);
        Image::make($request->file('gambar_koleksi'))->fit(100, 100)->save( storage_path('app/public/koleksi/thumb/'.$filename), 100);
        $koleksi-> gambar_koleksi = $filename;
        $koleksi -> save();

        $artefak = new Artefak;
        $artefak -> koleksi_id = $koleksi->id;
        $artefak -> jaman = $request->input('jaman');
        $artefak -> bahan = $request->input('bahan');
        $artefak -> save();
        
     }
           if ($jenis_koleksi=='mollusca'){
        $validatedData = $request->validate([
        'no_koleksi' => 'required|unique:koleksi',
        'nama_ilmiah' => 'required',
        'asal_koleksi' => 'required',
        'tgl_ditemukan' => 'required|before:tomorrow',
        'gambar_koleksi' =>'required' ,
        'penemu' =>'required|alpha'
        ],
        [
        'no_koleksi.required' => 'no koleksi tidak boleh kosong',
        'no_koleksi.unique' => 'no koleksi telah terdaftar',
        'nama_ilmiah.required' => 'Nama tidak boleh kosong',
        'asal_koleksi.required' => 'Asal tidak boleh kosong',
        'tgl_ditemukan.required' => 'Tanggal tidak boleh kosong',
        'tgl_ditemukan.before' => 'Tanggal tidak boleh lebih dari hari ini',
        'penemu.required' => 'penemu tidak boleh kosong',
        'penemu.alpha' => 'Nama penemu harus alphabet',
        'gambar_koleksi.required' => 'Gambar tidak boleh kosong',
        ]);

        $koleksi = new koleksi;
        $koleksi -> no_koleksi = $request->input('no_koleksi');
        $koleksi -> nama_ilmiah = $request->input('nama_ilmiah');
        $koleksi -> nama_umum = $request->input('nama_umum');
        $koleksi -> jenis_koleksi = $request->input('jenis_koleksi');
        $koleksi -> asal_koleksi = $request->input('asal_koleksi');
        $koleksi -> tgl_ditemukan = $request->input('tgl_ditemukan');
        $koleksi -> usia = $request->input('usia');
        $koleksi -> penemu = $request->input('penemu');
        $koleksi -> status = 'nonperaga';
        $koleksi -> status_pengajuan = 'belum';
        $koleksi -> deskripsi = $request-> input('deskripsi');
        $filename ='koleksi_'.time().rand(1000,9999).'.jpg';
        Image::make($request->file('gambar_koleksi'))->save( storage_path('app/public/koleksi/'.$filename), 100);
        Image::make($request->file('gambar_koleksi'))->fit(100, 100)->save( storage_path('app/public/koleksi/thumb/'.$filename), 100);
        $koleksi-> gambar_koleksi = $filename;
        $koleksi -> save();

        $mollusca = new Mollusca;
        $mollusca -> koleksi_id = $koleksi->id;
        $mollusca -> kelas = $request->input('kelas');
        $mollusca -> ukuran = $request->input('ukuran');
        $mollusca -> bentuk = $request->input('bentuk');
        $mollusca -> save();
     }
        return redirect()->action('StaffDokumentasi\KoleksiController@index', ['jenis_koleksi' => $jenis_koleksi])->with('msg', 'Data berhasil ditambahkan');
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

        return view('staff_dokumentasi.koleksi.show')->with('koleksi', $koleksi)->with('jenis_koleksi', $koleksi -> jenis_koleksi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $jenis_koleksi = $request->input('jenis_koleksi');

        if ($jenis_koleksi=='artefak'){
         $koleksi = Koleksi::with('artefak')->find($id);
        return view('staff_dokumentasi.koleksi.edit')->with('koleksi', $koleksi)->with('jenis_koleksi', $jenis_koleksi);
        }
        if ($jenis_koleksi=='batuan'){
         $koleksi = Koleksi::with('batuan')->find($id);
        return view('staff_dokumentasi.koleksi.edit')->with('koleksi', $koleksi)->with('jenis_koleksi', $jenis_koleksi);
        }
        if ($jenis_koleksi=='vertebrata'){
         $koleksi = Koleksi::with('vertebrata')->find($id);
        return view('staff_dokumentasi.koleksi.edit')->with('koleksi', $koleksi)->with('jenis_koleksi', $jenis_koleksi);
        }
        if ($jenis_koleksi=='mollusca'){
         $koleksi = Koleksi::with('mollusca')->find($id);
        return view('staff_dokumentasi.koleksi.edit')->with('koleksi', $koleksi)->with('jenis_koleksi', $jenis_koleksi);
        }
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
        $validatedData = $request->validate([
        'no_koleksi' => 'required|',
        'nama_ilmiah' => 'required',
        'asal_koleksi' => 'required',
        'tgl_ditemukan' => 'required|before:tomorrow',
        'gambar_koleksi' =>'required' ,
        'penemu' =>'required'
        ],
        [
        'no_koleksi.required' => 'no koleksi tidak boleh kosong',
        'nama_ilmiah.required' => 'Nama tidak boleh kosong',
        'asal_koleksi.required' => 'Asal tidak boleh kosong',
        'tgl_ditemukan.required' => 'Tanggal tidak boleh kosong',
        'tgl_ditemukan.before' => 'Tanggal tidak boleh lebih dari hari ini',
        'penemu.required' => 'penemu tidak boleh kosong',
        'gambar_koleksi.required' => 'Gambar tidak boleh kosong',
        ]);


        $koleksi = Koleksi::find($id);
        $koleksi -> no_koleksi = $request->input('no_koleksi');
        $koleksi -> nama_ilmiah = $request->input('nama_ilmiah');
        $koleksi -> jenis_koleksi = $request->input('jenis_koleksi');
        $koleksi -> asal_koleksi = $request->input('asal_koleksi');
        $koleksi -> tgl_ditemukan = $request->input('tgl_ditemukan');
        $koleksi -> usia = $request->input('usia');
        $koleksi -> penemu = $request->input('penemu');
        
        Storage::delete(['public/koleksi/'.$koleksi->gambar_koleksi, 'public/koleksi/thumb/'.$koleksi->gambar_koleksi]);
        $filename ='koleksi_'.time().rand(1000,9999).'.jpg';
        Image::make($request->file('gambar_koleksi'))->save( storage_path('app/public/koleksi/'.$filename), 100);

        Image::make($request->file('gambar_koleksi'))->fit(100, 100)->save( storage_path('app/public/koleksi/thumb/'.$filename), 100);

        $koleksi-> gambar_koleksi = $filename;

        $koleksi -> status = $request->input('status');
        $koleksi -> status_pengajuan = $request->input('status_pengajuan');
        $koleksi -> save();

         return redirect()->action('StaffDokumentasi\KoleksiController@index')->with('msg', 'Data berhasil diedit');
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
        Storage::delete(['public/koleksi/'.$koleksi->gambar_koleksi, 'public/koleksi/thumb/'.$koleksi->gambar_koleksi]);
        return redirect()->action('StaffDokumentasi\KoleksiController@index')->with('msg', 'Data berhasil dihapus');

    }
}
