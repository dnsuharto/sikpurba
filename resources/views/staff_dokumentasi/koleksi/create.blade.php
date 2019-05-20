@extends('layout')

@section('body')

<div class="container" style="margin-top: 20px; text-align: center;">
	<div class="card" style="width: 24rem; justify-content: center; margin: 80px auto;">
	  <div class="card-body">
	    <h5 class="card-title" style="text-align: center;">Tambah Koleksi</h5>
	   		<form enctype="multipart/form-data" style="text-align: left;" action="{{ action('StaffDokumentasi\KoleksiController@store') }}" method="post">
		    	@csrf
			  
			  <div class="form-group">
			    <label>No Koleksi</label>
			    <input name="no_koleksi" value="{{ old('no_koleksi') }}" class="form-control" placeholder="Masukkan No Koleksi">
			    	@if ($errors->has('no_koleksi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('no_koleksi') }}</div>
				    @endif
			  </div>
			  <div class="form-group">
			    <label>Nama Koleksi</label>
			    <input name="nama_koleksi" value="{{ old('nama_koleksi') }}" class="form-control" placeholder="Masukkan Nama Koleksi">
			    	@if ($errors->has('nama_koleksi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('nama_koleksi') }}</div>
				    @endif
			  </div>
			  <div class="form-group">
				  <label>Jenis Koleksi:</label>
				  <select class="form-control" name="jenis_koleksi">
				    <option value="batuan" @if(old('jenis_koleksi') == 'batuan') selected=true @endif>Batuan</option>
				    <option value="fosil" @if(old('jenis_koleksi') == 'fosil') selected=true @endif>Fosil</option>
				    <option value="lainnya" @if(old('jenis_koleksi') == 'lainnya') selected=true @endif>Lainnya</option>
				  </select>
			  </div>
			  <div class="form-group">
			    <label>Asal Koleksi</label>
			    <input name="asal_koleksi" value="{{ old('asal') }}" class="form-control" placeholder="Masukkan Asal Koleksi">
			    	@if ($errors->has('asal_koleksi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('asal_koleksi') }}</div>
				    @endif
				</div>
			  <div class="form-group">
			    <label>Tanggal ditemukan Koleksi</label>
			    <input type="date" name="tgl_ditemukan" value="{{ old('tgl_ditemukan') }}" class="form-control" placeholder="Masukkan Tanggal ditemukan Koleksi">
			    	@if ($errors->has('tgl_ditemukan')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('tgl_ditemukan') }}</div>
				    @endif
				</div>
			  <div class="form-group">
			    <label>Usia</label>
			    <input name="usia" value="{{ old('usia') }}" class="form-control" placeholder="Masukkan Usia Koleksi">
			    	@if ($errors->has('usia')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('usia') }}</div>
				    @endif
			  <label>Penemu</label>
			    <input name="penemu" value="{{ old('penemu') }}" class="form-control" placeholder="Masukkan Nama Penemu Koleksi">
			    	@if ($errors->has('penemu')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('penemu') }}</div>
				    @endif
			 </div>
			 <div class="form-group">
			 	<label>Gambar Koleksi</label>
			 	<input name="gambar_koleksi" type="file" id="gambar_koleksi" data-show-remove="false"  />
			 	@if ($errors->has('gambar_koleksi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('gambar_koleksi') }}</div>
				    @endif
			 </div>
			 <div class="form-group">
				  <label>Status Koleksi:</label>
				  <select class="form-control" name="status">
				    <option value="nonperaga" @if(old('status') == 'nonperaga') selected=true @endif>Nonperaga</option>
				    <option value="peraga" @if(old('status') == 'peraga') selected=true @endif>Peraga</option>
				  </select>
			  </div>
			  <div class="form-group">
				  <label>Status Pengajuan:</label>
				  <select class="form-control" name="status_pengajuan">
				    <option value="belum" @if(old('status_pengajuan') == 'belum') selected=true @endif>BELUM DIAJUKAN</option>
				    <option value="sedang" @if(old('status_pengajuan') == 'sedang') selected=true @endif>SEDANG DIAJUKAN</option>
				    <option value="telah" @if(old('status_pengajuan') == 'telah') selected=true @endif>TELAH DISETUJUI</option>
				  </select>
			  </div>
			  <div style="text-align: center;">
				  <button type="submit" class="btn btn-primary">Tambah Koleksi</button>
			  </div>
			</form>
	  </div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$('#gambar_koleksi').dropify({
    messages: {
        'remove':  'Remove',
    }
});
</script>
@endsection