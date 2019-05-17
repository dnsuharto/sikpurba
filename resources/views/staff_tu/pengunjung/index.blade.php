@extends('layout')

@section('body')
<section class="content-header">
      <h1>DATA PENGUNJUNG</h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
<div class="box box-primary">
<div class="box-body">

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Pengunjung</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Tanggal Kunjungan</th>
      <th scope="col" width="100">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pengunjungs as $pengunjung)
    <tr>
      <td>{{ $pengunjung->id_pengunjung }}</td>
      <td>{{ $pengunjung->nama }}</td>
      <td>{{ $pengunjung->email }}</td>
      <td>{{ $pengunjung->tgl_kunjungan }}</td>
      <td>
      	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
	    </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
<div class="box-footer clearfix">
  {!! $pengunjungs->links() !!}
</div>
</div>
</div>
</div>
</section>

@endsection