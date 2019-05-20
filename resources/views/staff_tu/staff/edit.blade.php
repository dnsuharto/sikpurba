@extends('layout')

@section('body')
<?php

$nama = $staff->nama;
if(old('nama')!=null){
	$nama = old('nama');
}
$nik = $staff->nik;
if(old('nik')!=null){
	$nik = old('nik');
}
$email = $staff->email;
if(old('email')!=null){
	$email = old('email');
}
$role = $staff->role;
if(old('role')!=null){
	$role = old('role');
}
?>
<section class="content-header">
      <h1>INFORMASI KOLEKSI</h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
    	
 <div class="box box-primary">
  <div class="box-header with-border">

<?php /*
<div class="container" style="margin-top: 20px; text-align: center;">
	<div class="card" style="width: 24rem; justify-content: center; margin: 80px auto;">
	  <div class="card-body">
	    <h5 class="card-title" style="text-align: center;">Edit Staff</h5>
	   		<form style="text-align: left;" action="{{ action('StaffTu\StaffController@update', $staff->id) }}" method="post">
		    	@csrf
			  <input type="hidden" name="_method" value="PUT">
			  <div class="form-group">
			    <label>Nama Staff</label>
			    <input name="nama" value="{{ $nama }}" class="form-control" placeholder="Masukkan Nama Staff">
			    	@if ($errors->has('nama')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('nama') }}</div>
				    @endif
			  </div>
			  <div class="form-group">
			    <label>NIK Staff</label>
			    <input name="nik" value="{{ $nik }}"  class="form-control"  placeholder="Masukkan NIK Staff">
			    	@if ($errors->has('nik')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('nik') }}</div>
				    @endif
			  </div>
			  <div class="form-group">
			    <label>Email Staff</label>
			    <input name="email" value="{{ $email }}"  class="form-control"  placeholder="Masukkan Email Staff">
				    @if ($errors->has('email')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('email') }}</div>
				    @endif
			  </div>
			  <div class="form-group">
				  <label>Role Staff:</label>
				  <select class="form-control" name="role" >
				    <option value="kepala_museum" @if($role == 'kepala_museum') selected=true @endif>Kepala Museum</option>
				    <option value="staff_tu" @if($role  == 'staff_tu') selected=true @endif>Staff TU</option>
				    <option value="staff_dokumen" @if($role   == 'staff_dokumen') selected=true @endif>Staff Dokumen</option>
				    <option value="staff_peraga" @if($role  == 'staff_peraga') selected=true @endif>Staff Peraga</option>
				  </select>
			  </div>

<!--
			  @if(Session::has('msg'))
			  <div style="color: red; font-size: 0.9em; margin-bottom: 20px; margin-top: -20px;">
			  	{{ session('msg') }}
			  </div>
			  @endif
-->
			  <div style="text-align: center;">
				  <button type="submit" class="btn btn-primary">Simpan</button>
			  </div>
			</form>
	  </div>
	</div>
</div>
*/?>

@endsection