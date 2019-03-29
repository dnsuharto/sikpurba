@extends('layout')

@section('body')

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
    <tr>
      <th scope="row">1</th>
      <td>Muhammad</td>
      <td>staftu@sikpurba.com</td>
      <td>
      	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
		<a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hapus</a>
	  </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Aisyah</td>
      <td>stafperaga@sikpurba.com</td>
      <td>
      	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
		<a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hapus</a>
	  </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Fatimah</td>
      <td>stafDokumentasi@sikpurba.com</td>
      <td>
      	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
		<a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hapus</a>
	  </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Asep</td>
      <td>KepalaMuseum@sikpurba.com</td>
      <td>
      	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
		<a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hapus</a>
	  </td>
    </tr>
  </tbody>
</table>

@endsection