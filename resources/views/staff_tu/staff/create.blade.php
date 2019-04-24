@extends('layout')

@section('body')

<div class="container" style="margin-top: 20px; text-align: center;">
	<div class="card" style="width: 24rem; justify-content: center; margin: 80px auto;">
	  <div class="card-body">
	    <h5 class="card-title" style="text-align: center;">Tambah Staff</h5>
	   		<form style="text-align: left;" action="{{ action('StaffTu\StaffController@store') }}" method="post">
		    	@csrf
			  
			  <div class="form-group">
			    <label>Nama Staff</label>
			    <input name="nama" class="form-control" placeholder="Masukkan Nama Staff">
			    	@if ($errors->has('nama')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('nama') }}</div>
				    @endif
			  </div>
			  <div class="form-group">
			    <label>NIK Staff</label>
			    <input name="nik" class="form-control"  placeholder="Masukkan NIK Staff">
			    	@if ($errors->has('nik')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('nik') }}</div>
				    @endif
			  </div>
			  <div class="form-group">
			    <label>Email Staff</label>
			    <input name="email" class="form-control"  placeholder="Masukkan Email Staff">
				    @if ($errors->has('email')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('email') }}</div>
				    @endif
			  </div>
			  <div class="form-group">
				  <label>Role Staff:</label>
				  <select class="form-control" name="role">
				    <option value="kepala_museum">Kepala Museum</option>
				    <option value="staff_dokumen">Staff Dokumen</option>
				    <option value="staff_peraga">Staff Peraga</option>
				    <option value="staff_tu">Staff TU</option>
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
				  <button type="submit" class="btn btn-primary">Tambah Staff</button>
			  </div>
			</form>
	  </div>
	</div>
</div>


@endsection