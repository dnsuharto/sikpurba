@extends('layout')
@section('body')
<form action="{{ action('StaffDokumen\KoleksiController@index') }}">
<div class="col-md-3">
 <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" alt="User profile picture" src="{{ asset('StaffDokumen/KoleksiController/' . $koleksi->gambar_koleksi) }}">

              <h3 class="profile-username text-center">{{ $koleksi->nama_koleksi}}</h3>

              <h4 class="text-muted text-center">{{ $koleksi->jenis_koleksi }}</h4>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>No Koleksi</b> <a class="pull-right">{{ $koleksi->no_koleksi }}</a>
                </li>
                <li class="list-group-item">
                  <b>Asal Koleksi</b> <a class="pull-right">{{ $koleksi->asal_koleksi }}</a>
                </li>
                <li class="list-group-item">
                  <b>Usia Koleksi</b> <a class="pull-right">{{ $koleksi->usia }}</a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Ditemukan</b> <a class="pull-right">{{ $koleksi->tgl_ditemukan}}</a>
                </li>
                <li class="list-group-item">
                  <b>Penemu </b> <a class="pull-right">{{ $koleksi->penemu}}</a>
                </li>
              </ul>
              <button type="submit" class="btn btn-primary btn-block"><b>KEMBALI</b></button>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
</form>
@endsection