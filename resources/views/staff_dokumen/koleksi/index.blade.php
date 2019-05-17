@extends('layout')

@section('body')

<section class="content-header">
      <h1>INFORMASI KOLEKSI</h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">

    @if(Session::has('msg'))
        <div class="alert alert-success mt-3">
          {{ session('msg') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
  <div class="box box-primary">
  <div class="box-header with-border">
    <a href="{{ action('StaffDokumen\KoleksiController@create') }}" class="btn btn-primary btn-sm active" style="float: left;" role="button" aria-pressed="true">Tambah Koleksi</a>
  </div>

  <div class="box-body">
  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No Koleksi</th>
        <th width="80"></th>
        <th scope="col">Nama Koleksi</th>
        <th scope="col">Jenis Koleksi</th>
        <th scope="col">Asal Koleksi</th>
        <th scope="col">Tanggal Ditemukan</th>
    	  <th scope="col">Usia</th>
    	  <th scope="col">Penemu</th>
        <th scope="col">Status</th>
        <th scope="col">Status Pengajuan</th>
        <th scope="col" width="150">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($koleksis as $koleksi)
      <tr>
        <td>{{ $koleksi->no_koleksi }}</td>
        <td><img class="img-fluid" src="{{ asset('storage/koleksi/thumb/'.$koleksi->gambar_koleksi) }}"></td>
        <td>{{ $koleksi->nama_koleksi }}</td>
        <td>{{ $koleksi->jenis_koleksi }}</td>
        <td>{{ $koleksi->asal_koleksi }}</td>
        <td>{{ $koleksi->tgl_ditemukan }}</td>
        <td>{{ $koleksi->usia }}</td>
        <td>{{ $koleksi->penemu }}</td>
        <td>
          @if($koleksi->status=='nonperaga')
            <div class="badge btn-secondary">PENYIMPANAN</div>
            @endif
            @if($koleksi->status=='peraga')
            <div class="badge btn-primary">PERAGAAN</div>
            @endif
        </td>
        <td>
            @if($koleksi->status_pengajuan=='belum')
            <div class="badge btn-danger">BELUM DIAJUKAN</div>
            @endif
            @if($koleksi->status_pengajuan=='sedang')
            <div class="badge btn-warning">SEDANG DIAJUKAN</div>
            @endif
            @if($koleksi->status_pengajuan=='telah')
            <div class="badge btn-primary">TELAH DISETUJUI</div>
            @endif
        </td>
        <td>
        	<a href="{{ action('StaffDokumen\KoleksiController@show', $koleksi->id) }}" class="btn btn-primary btn-xs active" role="button" aria-pressed="true">Lihat</a>
          <a href="{{ action('StaffDokumen\KoleksiController@edit', $koleksi->id) }}" class="btn btn-secondary btn-xs active" role="button" aria-pressed="true">Edit</a>
  		<button onclick="hapus({{ $koleksi->id }})" class="btn btn-danger btn-xs active" role="button" aria-pressed="true">Hapus</button>
  	  </td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
<div class="box-footer clearfix">
      {!! $koleksis->links() !!}
</div>
</div>
</div>
</div>
</section>
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">HAPUS DATA KOLEKSI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form style="text-align: left;" action="{{ action('StaffDokumen\KoleksiController@index') }}" method="post">
          @csrf
          <input type="hidden" name="_method" value="DELETE">
          <div class="modal-body">
            Apakah Yakin akan dihapus ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-danger">Ya</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
  @section('script')
  <script type="text/javascript">
    function hapus(id) {
      $('#deleteModal').modal('show');
      var action = $('#deleteModal form').attr('action');
      $('#deleteModal form').attr('action', action+'/'+id);
    }
  </script>
@endsection