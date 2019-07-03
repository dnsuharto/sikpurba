@extends('layout')
@section('body')

<section class="content-header">
  <h1>Detail Koleksi</h1>

</section>

<section class="content">

<div class="row">
<div class="col-md-3">
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" alt="User profile picture" src="{{ asset('storage/koleksi/thumb/'.$koleksi->gambar_koleksi) }}">

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
          <!-- field tambahan setiap jenis -->
          @if ($koleksi->jenis_koleksi =='artefak')
          <li class="list-group-item">
            <b>Jaman Koleksi</b> <a class="pull-right">{{ $koleksi->artefak->jaman}}</a>
          </li>
          <li class="list-group-item">
            <b>Bahan Baku Koleksi</b> <a class="pull-right">{{ $koleksi->artefak->bahan}}</a>
          </li>
          @endif
          @if ($koleksi->jenis_koleksi =='mollusca')
          <li class="list-group-item">
            <b>Kelas Mollusca</b> <a class="pull-right">{{ $koleksi->mollusca->kelas}}</a>
          </li>
          <li class="list-group-item">
            <b>Ukuran Mollusca</b> <a class="pull-right">{{ $koleksi->mollusca->ukuran}}</a>
          </li>
          <li class="list-group-item">
            <b>Bentuk Mollusca</b> <a class="pull-right">{{ $koleksi->mollusca->bentuk}}</a>
          </li>
          @endif
          <!--endif-->
        </ul>
        <button type="submit" class="btn btn-primary btn-block"><b>KEMBALI</b></button>
      </div>
      <!-- /.box-body -->
    </div>
</div>

<div class="col-md-9">
    <div class="box box-primary">
      <div class="box-body box-profile">

        <h3 class="profile-username text-center">Deskripsi</h3>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            {{ $koleksi->deskripsi}}
          </li>
        </ul>
      </div>
      <!-- /.box-body -->
    </div>
</div>

</div>

</section>
@endsection