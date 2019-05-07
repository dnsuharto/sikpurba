@extends('layout')

@section('body')
  <div class="container-fluid">
    @if(Session::has('msg'))
        <div class="alert alert-success mt-3">
          {{ session('msg') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
  <div class="card">
  <div class="card-body">
    <a href="{{ action('StaffDokumen\KoleksiController@create') }}" class="btn btn-primary btn-sm active" style="float: right;" role="button" aria-pressed="true">Tambah Koleksi</a>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No Koleksi</th>
        <th scope="col">Nama Koleksi</th>
        <th scope="col">Jenis Koleksi </th>
        <th scope="col">Asal Koleksi </th>
        <th scope="col">Tanggal Ditemukan </th>
    	  <th scope="col">Usia </th>
    	  <th scope="col">Penemu </th>
    	  <th scope="col">Gambar </th>
        <th scope="col">Status </th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($koleksis as $koleksi)
      <tr>
        <td>{{ $koleksi->no_koleksi }}</td>
        <td>{{ $koleksi->nama_koleksi }}</td>
        <td>{{ $koleksi->jenis_koleksi }}</td>
        <td>{{ $koleksi->asal_koleksi }}</td>
        <td>{{ $koleksi->tgl_ditemukan }}</td>
        <td>{{ $koleksi->usia }}</td>
        <td>{{ $koleksi->penemu }}</td>
        <td>{{ $koleksi->gambar_koleksi }}</td>
        <td>{{ $koleksi->status }}</td>
        <td>
        	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
          <a href="{{ action('StaffDokumen\KoleksiController@edit', $koleksi->id) }}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Edit</a>
  		<button onclick="hapus({{ $koleksi->id }})" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</button>
  	  </td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
      {!! $koleksis->links() !!}
</div>
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
  <script type="text/javascript">
    function hapus(id) {
      $('#deleteModal').modal('show');
      var action = $('#deleteModal form').attr('action');
      $('#deleteModal form').attr('action', action+'/'+id);
    }
  </script>
@endsection