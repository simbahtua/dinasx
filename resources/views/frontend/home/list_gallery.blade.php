@extends('frontend.home.app')
@section('content')
    <div class="page_header_wrap" style="background: url(<?php echo e(asset('web/images/bg-header.jpg')); ?>) center -25px no-repeat">
    <div class="container">
        <h2 class="page_category">{{ $page_title }} </h2>
    </div>
</div>
    <div class="container">

        <div class="panel panel-default panel-content">
            <div class="panel-heading">
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>

            <div class="panel-body">
                <div class="row">
                    <!-- main content -->
                    <div class="col-md-12" id="main-content">
                        <div class="widget">
                            <div class="panel panel-default panel-theme">
                                <div class="panel-heading">
                                    <h2 class="heading-center">Album Gallery</h2>
                                </div>

                                <div class="panel-body">
                                    <div id="block-gallery">

                                        <h2>Gallery Foto</h2>
                                        <!--<div class="text-left"><i class="fa fa-clock-o"></i>&nbsp; <small>Jumat, 14 November 2014 16.02 WIB</small></div>-->
                                        <hr>
                                        <div class="item">
                                            @if(!empty($gallery))
                                            @foreach ($gallery as $row) 
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <a href="<?php echo e(asset('storage/')); ?>/{{$row->file}}" rel="prettyPhoto[gallery01]" title="You can add caption to pictures." class="thumbnail"><img src="<?php echo e(asset('storage/')); ?>/{{$row->file}}" alt="{{ $row->title }}"></a>
                                                <div class="clearfix"></div>
                                                <div class="share"></div>
                                            </div>
                                            @endforeach
                                            @else 
                                            <div class="alert alert-info">
                                                Data Gallery Belum Ada 
                                            </div>
                                            @endif
                                        </div>

                                        <div class="clearfix"></div>
                                        <ul class="pagination">
                                            <li class="active"><span class="page-numbers">1</span></li>
                                            <li><a class="page-numbers" href="#">2</a></li>
                                            <li><a class="page-numbers" href="#">3</a></li>
                                            <li><span class="page-numbers dots">…</span></li>
                                            <li><a class="page-numbers" href="#">203</a></li>
                                            <li><a class="page-numbers" href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection