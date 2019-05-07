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
$no_koleksi= $koleksi->no_koleksi;
if(old('no_koleksi')!=null){
	$no_koleksi = old('no_koleksi');
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


?>
<div class="container" style="margin-top: 20px; text-align: center;">
	<div class="card" style="width: 24rem; justify-content: center; margin: 80px auto;">
	  <div class="card-body">
	    <h5 class="card-title" style="text-align: center;">Tambah Koleksi</h5>
	   		<form style="text-align: left;" action="{{ action('StaffDokumen\KoleksiController@store') }}" method="post">
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
			    <input name="asal_koleksi" value="{{ old('asal_koleksi') }}" class="form-control" placeholder="Masukkan Asal Koleksi">
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
			  </div>
			  <div class="form-group">
			  <label>Penemu</label>
			    <input name="penemu" value="{{ old('penemu') }}" class="form-control" placeholder="Masukkan Nama Penemu Koleksi">
			    	@if ($errors->has('penemu')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('penemu') }}</div>
				    @endif
			  </div>
			 <div class="form-group">
				  <label>Status Koleksi:</label>
				  <select class="form-control" name="status">
				    <option value="nonperaga" @if(old('status') == 'nonperaga') selected=true @endif>Nonperaga</option>
				    <option value="peraga" @if(old('status') == 'peraga') selected=true @endif>Peraga</option>
				  </select>
			  </div>
			  <div style="text-align: center;">
				  <button type="submit" class="btn btn-primary">Simpan</button>
			  </div>
			</form>
	  </div>
	</div>
</div>


@endsection