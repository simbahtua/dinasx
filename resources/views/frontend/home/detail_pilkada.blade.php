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
                <li><a href="#">Beranda </a></li>
                <li><a href="#">Berita</a></li>
                <li class="active">{{$data->title}}</li>
            </ol>
        </div>

        <div class="panel-body">
            <div class="row">
                <!-- main content -->
                <div class="col-md-8" id="main-content">
                    <div class="widget-post">
                        <div class="post-heading">
                            <h1 class="post-title">{{ $data->title }}</h1>
                            <div class="clearfix"></div>
                            @php
                            $date = $data->created_at;
                            $tanggal = date('l , d M Y', strtotime($date));
                            @endphp
                            <ul class="meta">
                                <li class="post-meta-date"><i class="fa fa-clock-o"></i>{{ $tanggal }}</li>
                                <li class="post-meta-author"><i class="fa fa-user"></i>Oleh: <a href="#" title="Post Title" rel="author">{{ $data->name }}</a></li>
                                <!--<li class="post-meta-view"><i class="fa fa-file-text"></i>Dibaca: 3012 Kali</li>-->
                                <!--<li class="post-meta-comments comments-scroll"><i class="fa fa-comments"></i><a href="#">0 Komentar</a></li>-->
                            </ul>
                        </div>
                        <div class="post-content">
                            <!--<img src="uploads/news/news-large.jpg" class="img-content">-->
                            <img src="<?php echo e(asset('storage/')); ?>/{{$data->image}}" alt="{{ $data->title }}">
                            <br>
                            <br>
                            <p> {!! $data->body !!}</p>
                        </div>
                    </div>
                </div>

                <!-- sidebar -->
                <div class="col-md-4" id="side">
                    <div class="panel panel-default panel-theme">
                        <div class="panel-heading">
                            <h2>Berita Lainnya</h2>
                        </div>
                        <div class="panel-body">
                            <ul class="sidebar-list">
                                @if(!empty($berita_random))
                                @foreach ($berita_random as $data_random)
                                @php
                                $text = substr($data_random->body, 0, 350);
                                $date = $data_random->created_at;
                                $tanggal = date('l , d M Y', strtotime($date));
                                @endphp
                                <li>
                                    <a href="{{route('detail_berita', [$data_random->id])}}" title="{{ $data_random->title }}">{{ $data_random->title }}</a>
                                    <ul class="meta">
                                        <li class="post-meta-date"><i class="fa fa-clock-o"></i>{{ $tanggal }}</li>
                                    </ul>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Berita Belum Ada 
                                </div>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection