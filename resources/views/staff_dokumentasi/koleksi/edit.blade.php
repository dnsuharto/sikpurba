@extends('layout')

@section('body')
<?php

$no_koleksi= $koleksi->no_koleksi;
if(old('no_koleksi')!=null){
	$no_koleksi = old('no_koleksi');
}
$nama_koleksi= $koleksi->nama_koleksi;
if(old('nama_koleksi')!=null){
	$nama_koleksi = old('nama_koleksi');
}
$asal_koleksi= $koleksi->asal_koleksi;
if(old('asal_koleksi')!=null){
	$asal_koleksi = old('asal_koleksi');
}
$jenis_koleksi= $koleksi->jenis_koleksi;
if(old('jenis_koleksi')!=null){
	$jenis_koleksi = old('jenis_koleksi');
}
$tgl_ditemukan= $koleksi->tgl_ditemukan;
if(old('tgl_koleksi')!=null){
	$tgl_koleksi = old('tgl_koleksi');
}
$usia= $koleksi->usia;
if(old('usia')!=null){
	$usia = old('usia');
}
$penemu= $koleksi->penemu;
if(old('penemu')!=null){
	$penemu = old('penemu');
}
$status= $koleksi->status;
if(old('status')!=null){
	$status = old('status');
}
$status_pengajuan= $koleksi->status_pengajuan;
if(old('status_pengajuan')!=null){
	$status_pengajuan = old('status_pengajuan');
}
?>
<section class="content">
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Koleksi</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	   		<form class="form-horizontal" enctype="multipart/form-data" style="text-align: left;" action="{{ action('StaffDokumentasi\KoleksiController@update', $koleksi->id) }}" method="post">
		    	@csrf
			  <input type="hidden" name="_method" value="PUT">
			  <div class="box-body">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">No Koleksi</label>
			    <div class="col-sm-10">
			    <input name="no_koleksi" value="{{ $no_koleksi }}" class="form-control" placeholder="Masukkan No Koleksi">
			    	@if ($errors->has('no_koleksi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('no_koleksi') }}
				    	</div>
				    @endif
			  </div>
			</div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Nama Koleksi</label>
			    <div class="col-sm-10">
			    <input name="nama_koleksi" value="{{ $nama_koleksi }}" class="form-control" placeholder="Masukkan Nama Koleksi">
			    	@if ($errors->has('nama_koleksi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('nama_koleksi') }}</div>
				    @endif
			  </div>
			</div>
			  <div class="form-group">
				  <label class="col-sm-2 control-label">Jenis Koleksi:</label>
				  <div class="col-sm-10">
				  <select class="form-control" name="jenis_koleksi">
				    <option value="batuan" @if($jenis_koleksi == 'batuan') selected=true @endif>Batuan & Mineral</option>
				    <option value="vertebrata" @if($jenis_koleksi == 'vertebrata') selected=true @endif>Vertebrata & Hominid</option>
				    <option value="mollusca" @if($jenis_koleksi == 'mollusca') selected=true @endif>Mollusca</option>
				    <option value="artefak" @if($jenis_koleksi == 'artefak') selected=true @endif>Artefak</option>
				  </select>
			  </div>
			</div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Asal Koleksi</label>
			    <div class="col-sm-10">
			    <input name="asal_koleksi" value="{{ $asal_koleksi }}" class="form-control" placeholder="Masukkan Asal Koleksi">
			    	@if ($errors->has('asal_koleksi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('asal_koleksi') }}</div>
				    @endif
			  </div>
			</div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Tanggal ditemukan Koleksi</label>
			    <div class="col-sm-10">
			    <input type="date" name="tgl_ditemukan" value="{{ $tgl_ditemukan }}" class="form-control" placeholder="Masukkan Tanggal ditemukan Koleksi">
			    	@if ($errors->has('tgl_ditemukan')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('tgl_ditemukan') }}</div>
				    @endif
			  </div>
			</div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Usia</label>
			    <div class="col-sm-10">
			    <input name="usia" value="{{ $usia }}" class="form-control" placeholder="Masukkan Usia Koleksi">
			    	@if ($errors->has('usia')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('usia') }}</div>
				    @endif
			  </div>
			</div>
			  <div class="form-group">
			  <label class="col-sm-2 control-label">Penemu</label>
			  <div class="col-sm-10">
			    <input name="penemu" value="{{ $penemu }}" class="form-control" placeholder="Masukkan Nama Penemu Koleksi">
			    	@if ($errors->has('penemu')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('penemu') }}</div>
				    @endif
			  </div>
			</div>
			  <div class="form-group">
			 	<label class="col-sm-2 control-label">Gambar Koleksi</label>
			 	<div class="col-sm-10">
			 	<input name="gambar_koleksi" type="file" class="dropify" data-show-remove="false"  />
			 	@if ($errors->has('gambar_koleksi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('gambar_koleksi') }}</div>
				    @endif
			 </div>
			</div>
			 <div class="form-group">
				  <label class="col-sm-2 control-label">Status Koleksi:</label>
				  <div class="col-sm-10">
				  <select class="form-control" name="status">
				    <option value="nonperaga" @if($status == 'nonperaga') selected=true @endif>Nonperaga</option>
				    <option value="peraga" @if($status == 'peraga') selected=true @endif>Peraga</option>
				  </select>
			  </div>
			</div>
			   <div class="form-group">
				  <label class="col-sm-2 control-label">Status Pengajuan:</label>
				  <div class="col-sm-10">
				  <select class="form-control" name="status_pengajuan">
				    <option value="belum" @if($status_pengajuan == 'belum') selected=true @endif>BELUM DIAJUKAN</option>
				    <option value="sedang" @if($status_pengajuan == 'sedang') selected=true @endif>SEDANG DIAJUKAN</option>
				    <option value="telah" @if($status_pengajuan == 'telah') selected=true @endif>TELAH DISETUJUI</option>
				  </select>
			  </div>
			</div>
			  <div style="text-align: center;">
				  <button type="submit" class="btn btn-primary">Simpan</button>
			  </div>
			</form>
	  </div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$('.dropify').dropify({
    messages: {
        'remove':  'Remove',
    }
});
</script>
@endsection