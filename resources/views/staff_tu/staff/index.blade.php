@extends('layout')

@section('body')
<!--
<style> table{border: 3px} </style>
-->
<div class="container">
<div class="card">
  <div class="card-body">
    <a href="{{ action('StaffTu\StaffController@create') }}" class="btn btn-primary btn-sm active" style="float: right;" role="button" aria-pressed="true">Tambah Staff</a>
  </div>
	<table class="table">
  	<thead class="thead-dark">
    <tr>
	      <th scope="col">NIK</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Email</th>
	      <th scope="col">Role</th>
	      <th scope="col">Aksi</th>
    </tr>
 	</thead>
  <tbody>
    @foreach($staffs as $staff)
    <tr>
      <th>{{ $staff->nik }}</th>
      <td>{{ $staff->nama }}</td>
      <td>{{ $staff->email }}</td>
      <td>{{ $staff->role }}</td>
      <td>
      	<a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat</a>
      	<a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Edit</a>
		    <a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hapus</a>
	    </td>
    </tr>
    @endforeach
  </tbody>
  </table>
</div>

  </div>
@endsection