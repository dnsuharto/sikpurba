 @extends('layout')

@section('body')

<section class="content">
	<div class="box box-info">
	    <div class="box-header with-border">
	        <h3 class="box-title">Tambah Koleksi</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    <form class="form-horizontal" enctype="multipart/form-data" style="text-align: left;" action="{{ action('StaffDokumentasi\KoleksiController@store')}}?jenis={{ $jenis_koleksi }}" method="post">
		    	@csrf
		    <input type="hidden" name="jenis_koleksi" value="{{ $jenis_koleksi }}">
	        <div class="box-body">
	        	<div class="form-group">
	                <label class="col-sm-2 control-label">Jenis Koleksi</label>
	                <div class="col-sm-10">
	                	<input type="text" name="jenis_koleksi" class="form-control" value="{{ ucwords(str_replace("_", " ",$jenis_koleksi)) }}" disabled="true">
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">No. Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="no_koleksi" value="{{ old('no_koleksi') }}" class="form-control" placeholder="Masukkan No Koleksi">
				    	@if ($errors->has('no_koleksi')) 
					    	<div style="color: #ff0000 ">
					    		{{ $errors->first('no_koleksi') }}
					    	</div>
					    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Nama Ilmiah</label>
	                <div class="col-sm-10">
	                	<input name="nama_ilmiah" value="{{ old('nama_ilmiah') }}" class="form-control" placeholder="Masukkan Nama Ilmiah">
					    	@if ($errors->has('nama_ilmiah')) 
						    	<div style="color: #ff0000 ">
						    		{{ $errors->first('nama_ilmiah') }}
						    	</div>
						    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Nama Umum</label>
	                <div class="col-sm-10">
	                	<input name="nama_umum" value="{{ old('nama_umum') }}" class="form-control" placeholder="Masukkan Nama Umum">
					    	@if ($errors->has('nama_umum')) 
						    	<div style="color: #ff0000 ">
						    		{{ $errors->first('nama_umum') }}
						    	</div>
						    @endif
	                </div>
	            </div>
	            
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Asal Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="asal_koleksi" value="{{ old('asal') }}" class="form-control" placeholder="Masukkan Asal Koleksi">
					    	@if ($errors->has('asal_koleksi')) 
						    	<div style="color: #ff0000 ">
						    		{{ $errors->first('asal_koleksi') }}
						    	</div>
						    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Tanggal Ditemukan Koleksi</label>
	                <div class="col-sm-10">
	                	<input type="date" name="tgl_ditemukan" value="{{ old('tgl_ditemukan') }}" class="form-control" placeholder="Masukkan Tanggal ditemukan Koleksi">
			    	@if ($errors->has('tgl_ditemukan')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('tgl_ditemukan') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Usia Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="usia" value="{{ old('usia') }}" class="form-control" placeholder="Masukkan Usia Koleksi">
			    	@if ($errors->has('usia')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('usia') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Nama Penemu</label>
	                <div class="col-sm-10">
	                	<input name="penemu" value="{{ old('penemu') }}" class="form-control" placeholder="Masukkan Nama Penemu Koleksi">
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
	                <label class="col-sm-2 control-label">Deskripsi Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="deskripsi" value="{{ old('deskripsi') }}" class="form-control" placeholder="Masukkan Deskripsi Koleksi">
			    	@if ($errors->has('deskripsi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('deskripsi') }}</div>
				    @endif
	                </div>
	            </div>

	            @if($jenis_koleksi=='vertebrata')
	            <!-- Form Tambahan Vertebrata-->
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Spesies Vertebrata</label>
	                <div class="col-sm-10">
	                	<input name="spesies" value="{{ old('spesies') }}" class="form-control" placeholder="Masukkan Speies Koleksi">
			    	@if ($errors->has('spesies')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('spesies') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Tinggi Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="tinggi" value="{{ old('tinggi') }}" class="form-control" placeholder="Masukkan Tinggi Koleksi">
			    	@if ($errors->has('tinggi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('tinggi') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Panjang Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="panjang" value="{{ old('panjang') }}" class="form-control" placeholder="Masukkan Panjang Koleksi">
			    	@if ($errors->has('panjang')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('panjang') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Berat Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="berat" value="{{ old('berat') }}" class="form-control" placeholder="Masukkan Berat Koleksi">
			    	@if ($errors->has('berat')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('berat') }}</div>
				    @endif
	                </div>
	            </div>
	            @endif
	            @if($jenis_koleksi=='batuan')
	            <!-- Form Tambahan Batuan -->
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Tinggi Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="tinggi" value="{{ old('tinggi') }}" class="form-control" placeholder="Masukkan Tinggi Koleksi">
			    	@if ($errors->has('tinggi')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('tinggi') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Panjang Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="panjang" value="{{ old('panjang') }}" class="form-control" placeholder="Masukkan Panjang Koleksi">
			    	@if ($errors->has('panjang')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('panjang') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Berat Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="berat" value="{{ old('berat') }}" class="form-control" placeholder="Masukkan Berat Koleksi">
			    	@if ($errors->has('berat')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('berat') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Warna Batuan</label>
	                <div class="col-sm-10">
	                	<input name="warna" value="{{ old('warna') }}" class="form-control" placeholder="Masukkan Warna Batuan">
			    	@if ($errors->has('warna')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('warna') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Rumus Kimia Batuan</label>
	                <div class="col-sm-10">
	                	<input name="rumus_kimia" value="{{ old('rumus_kimia') }}" class="form-control" placeholder="Masukkan Rumus Kimia Batuan">
			    	@if ($errors->has('rumus_kimia')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('rumus_kimia') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Skala Kekerasan Batuan</label>
	                <div class="col-sm-10">
	                	<input name="skala_kekerasan" value="{{ old('skala_kekerasan') }}" class="form-control" placeholder="Masukkan Skala Kekerasan Batuan">
			    	@if ($errors->has('skala_kekerasan')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('skala_kekerasan') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Titik Lebur Batuan</label>
	                <div class="col-sm-10">
	                	<input name="titik_lebur" value="{{ old('titik_lebur') }}" class="form-control" placeholder="Masukkan Titik Lebur Batuan">
			    	@if ($errors->has('titik_lebur')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('titik_lebur') }}</div>
				    @endif
	                </div>
	            </div>
	            @endif
	            @if($jenis_koleksi=='mollusca')
	            <!-- Form Tambahan Mollusca -->
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Kelas Mollusca</label>
	                <div class="col-sm-10">
	                	<select class="form-control" name="kelas">
						    <option value="aplacopora" @if(old('kelas') == 'aplacopora') selected=true @endif>Aplacopora</option>
						    <option value="scapopoda" @if(old('kelas') == 'scapopoda') selected=true @endif>Scapopoda</option>
						    <option value="polyplacophora" @if(old('kelas') == 'polyplacophora') selected=true @endif>Polyplacophora</option>
						    <option value="gastropoda" @if(old('kelas') == 'gastropoda') selected=true @endif>Gastropoda</option>
						    <option value="bivalvia" @if(old('kelas') == 'bivalvia') selected=true @endif>Bivalvia</option>
						    <option value="cephalopoda" @if(old('kelas') == 'cephalopoda') selected=true @endif>Cephalopoda</option>
						</select>
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Ukuran Mollusca</label>
	                <div class="col-sm-10">
	                	<input name="ukuran" value="{{ old('ukuran') }}" class="form-control" placeholder="Masukkan Titik Lebur Batuan">
			    	@if ($errors->has('ukuran')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('ukuran') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Bentuk Mollusca</label>
	                <div class="col-sm-10">
	                	<input name="bentuk" value="{{ old('bentuk') }}" class="form-control" placeholder="Masukkan Titik Lebur Batuan">
			    	@if ($errors->has('bentuk')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('bentuk') }}</div>
				    @endif
	                </div>
	            </div>
	            @endif
	            @if($jenis_koleksi=='artefak')
	            <!-- Form Tambahan Artefak -->
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Zaman Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="jaman" value="{{ old('jaman') }}" class="form-control" placeholder="Masukkan Titik Lebur Batuan">
			    	@if ($errors->has('jaman')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('jaman') }}</div>
				    @endif
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">Bahan Dasar Koleksi</label>
	                <div class="col-sm-10">
	                	<input name="bahan" value="{{ old('bahan') }}" class="form-control" placeholder="Masukkan Titik Lebur Batuan">
			    	@if ($errors->has('bahan')) 
				    	<div style="color: #ff0000 ">{{ $errors->first('bahan') }}</div>
				    @endif
	                </div>
	            </div>
	            @endif
	        </div>

	        <!-- /.box-body -->
	        <div class="box-footer">
	            <button type="submit" class="btn btn-info pull-right">Tambah Koleksi</button>
	        </div>
	        <!-- /.box-footer -->
	    </form>
	</div>
</section>

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