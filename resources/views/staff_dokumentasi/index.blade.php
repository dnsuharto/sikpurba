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
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</section>
@endsection