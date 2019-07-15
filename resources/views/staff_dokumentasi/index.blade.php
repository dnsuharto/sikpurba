@extends('layout')

@section('body')
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ number_format($jumlah_batuan, 0, '.', ',') }}</h3>
                    <p>Batuan & Mineral</p>
                </div>
                <div class="icon">
                    <i class="fa fa-hand-rock-o"></i>
                </div>
                <a href="{{ action('StaffDokumentasi\KoleksiController@index') }}?jenis_koleksi=batuan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ number_format($jumlah_vertebrata, 0, '.', ',') }}</h3>
                    <p>Vertebrata dan Hominid</p>
                </div>
                <div class="icon">
                    <i class="fa fa-paw"></i>
                </div>
                <a href="{{ action('StaffDokumentasi\KoleksiController@index') }}?jenis_koleksi=vertebrata" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ number_format($jumlah_mollusca, 0, '.', ',') }}</h3>
                    <p>Mollusca</p>
                </div>
                <div class="icon">
                    <i class="fa fa-cloud"></i>
                </div>
                <a href="{{ action('StaffDokumentasi\KoleksiController@index') }}?jenis_koleksi=mollusca" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ number_format($jumlah_artefak, 0, '.', ',') }}</h3>
                    <p>Artefak</p>
                </div>
                <div class="icon">
                    <i class="fa fa-gear"></i>
                </div>
                <a href="{{ action('StaffDokumentasi\KoleksiController@index') }}?jenis_koleksi=artefak" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;">
        <canvas class="flot-base" width="743" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 594.6px; height: 300px;"></canvas>
        <canvas class="flot-overlay" width="743" height="375" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 594.6px; height: 300px;"></canvas>
        <span class="pieLabel" id="pieLabel0" style="position: absolute; top: 70.6px; left: 355.9px;">
            <div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series2<br>30%</div>
        </span>
        <span class="pieLabel" id="pieLabel1" style="position: absolute; top: 210.6px; left: 333.9px;">
            <div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series3<br>20%</div></span>
            <span class="pieLabel" id="pieLabel2" style="position: absolute; top: 129.6px; left: 174.9px;">
                <div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series4<br>50%</div>
            </span>
        </div>
</section>

<script src="../../bower_components/Flot/jquery.flot.js"></script>
@endsection