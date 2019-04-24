@extends('layout')

@section('body')
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
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($koleksis as $koleksi)
    <tr>
      <td>{{ $koleksi->nomor_koleksi }}</td>
      <td>{{ $koleksi->nama_koleksi }}</td>
      <td>{{ $koleksi->jenis_benda }}</td>
      <td>{{ $koleksi->asal_benda }}</td>
      <td>{{ $koleksi->tgl_benda }}</td>
      <td>{{ $koleksi->usia }}</td>
      <td>{{ $koleksi->penemu }}</td>
      <td>{{ $koleksi->gambar_koleksi }}</td>
      <td>
      	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
		<a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hapus</a>
	  </td>
    </tr>
   @endforeach
  </tbody>
</table>

@endsection