@extends('layout')

@section('body')
<div class="container-fluid">
<div class="card">
<div class="card-body">
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Pengunjung</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pengunjungs as $pengunjung)
    <tr>
      <td>{{ $pengunjung->id_pengunjung }}</td>
      <td>{{ $pengunjung->nama }}</td>
      <td>{{ $pengunjung->email }}</td>
      <td>
      	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
		    <a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hapus</a>
	    </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
{!! $pengunjungs->links() !!}
</div>


@endsection