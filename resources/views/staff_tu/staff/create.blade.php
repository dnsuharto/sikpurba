 @extends('layout')

@section('body')

<section class="content">
	<div class="box box-info">
	    <div class="box-header with-border">
	    		<h5 class="box-title">Tambah Staff</h5>
		</div>
	   		<form class="form-horizontal" enctype="multipart/form-data" style="text-align: left;" action="{{ action('StaffTu\StaffController@store') }}" method="post">
		    	@csrf
			<div class="box-body">
			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Nama Staff</label>
			    <div class="col-sm-10">
			    <input name="nama" value="{{ old('nama') }}" class="form-control" placeholder="Masukkan Nama Staff">
			    	@if ($errors->has('nama')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('nama') }}
				    	</div>
				    @endif
			  </div>
			</div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">NIK Staff</label>
			    <div class="col-sm-10">
			    <input name="nik" value="{{ old('nik') }}"  class="form-control"  placeholder="Masukkan NIK Staff">
			    	@if ($errors->has('nik')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('nik') }}</div>
				    @endif
			  </div>
			</div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Email Staff</label>
			    <div class="col-sm-10">
			    <input name="email" value="{{ old('email') }}"  class="form-control"  placeholder="Masukkan Email Staff">
				    @if ($errors->has('email')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('email') }}
				    	</div>
				    @endif
				</label>
			  </div>
			</div>
			  <div class="form-group">
				  <label class="col-sm-2 control-label">Role Staff:</label>
				  <div class="col-sm-10">
				  <select class="form-control" name="role">
				    <option value="kepala_museum" @if(old('role') == 'kepala_museum') selected=true @endif>Kepala Museum</option>
				    <option value="staff_dokumentasi" @if(old('role') == 'staff_dokumentasi') selected=true @endif>Staff Dokumentasi</option>
				    <option value="staff_peragaan" @if(old('role') == 'staff_peragaan') selected=true @endif>Staff Peragaan</option>
				    <option value="staff_tu" @if(old('role') == 'staff_tu') selected=true @endif>Staff TU</option>
				  </select>
				</div>
			  </div>
			  <div style="text-align: right;">
				  <button type="submit" class="btn btn-primary">Tambah Staff</button>
			  </div>
			</div>
			</form>
	  </div>
	</div>
</section>


@endsection