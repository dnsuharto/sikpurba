@extends('layout')

@section('body')

<section class="content">
	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Batuan dan Mineral</p>
            </div>
            <div class="icon">
              <i class="fa fa-hand-rock-o"></i>
            </div>
            <a href="{{ action('StaffDokumentasi\BatuanController@index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Vertebrata dan Hominid</p>
            </div>
            <div class="icon">
              <i class="fa fa-paw"></i>
            </div>
            <a href="{{ action('StaffDokumentasi\VertebrataController@index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Mollusca</p>
            </div>
            <div class="icon">
              <i class="fa fa-cloud"></i>
            </div>
            <a href="{{ action('StaffDokumentasi\MolluscaController@index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Artefak</p>
            </div>
            <div class="icon">
              <i class="fa fa-gear"></i>
            </div>
            <a href="{{ action('StaffDokumentasi\ArtefakController@index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
      	<div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height: 250px; width: 594px;" width="742" height="312"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      </div>
</section>
@endsection