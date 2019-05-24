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
  </div>
  <table class="table">
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
        <th scope="col">Aksi</th>
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
        	<a href="{{ action('KepalaMuseum\KoleksiController@show', $koleksi->id) }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
          <a href="{{ action('KepalaMuseum\KoleksiController@edit', $koleksi->id) }}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Edit</a>
  		<button onclick="hapus({{ $koleksi->id }})" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</button>
  	  </td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
      {!! $koleksis->links() !!}
</div>
        </form>
      </div>
    </div>
  </div>

@endsection