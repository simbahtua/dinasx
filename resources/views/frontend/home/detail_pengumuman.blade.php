@extends('frontend.home.app')
<!-- page title -->
@section('content')
<div class="page_header_wrap" style="background: url(<?php echo e(asset('web/images/bg-header.jpg')); ?>) center -25px no-repeat">
    <div class="container">
        <h2 class="page_category">{{ $page_title }}</h2>
    </div>
</div>      
<!-- page title -->
<div class="container">

    <div class="panel panel-default panel-content">
        <div class="panel-heading">
            <ol class="breadcrumb">
                <li><a href="#">Beranda </a></li>
                <li><a href="#">Pengumuman</a></li>
                <li class="active">{{$data->title}}</li>
            </ol>
        </div>
        <div class="panel-body">
            <div class="row">
                <!-- main content -->
                <div class="col-md-8" id="main-content">
                    <div class="widget-post">
                        <div class="post-heading">
                            <h1 class="post-title">{{$data->title}}</h1>
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

                        <div id="share-buttons">
                                <hr>
                                Bagikan Jika Bermanfaat :) :

                                    <!-- Facebook -->
                                    <a href="http://www.facebook.com/sharer.php?u={{route('detail_pengumuman', [$data->id])}}" target="_blank">
                                        <img src="<?php echo e(asset('web/images/facebook.png')); ?>" alt="Facebook" />
                                    </a>
                                    
                                    <!-- Google+ -->
                                    <a href="https://plus.google.com/share?url={{route('detail_pengumuman', [$data->id])}}" target="_blank">
                                        <img src="<?php echo e(asset('web/images/google.png')); ?>" alt="Google" />
                                    </a>
                                  
                                    <!-- Twitter -->
                                    <a href="https://twitter.com/share?url={{route('detail_pengumuman', [$data->id])}}" target="_blank">
                                        <img src="<?php echo e(asset('web/images/twitter.png')); ?>" alt="Twitter" />
                                    </a>
                                    <hr>

                                </div>

                                </div>
                    
                    

                </div>

                <!-- sidebar -->
                <div class="col-md-4" id="side">
                    <div class="panel panel-default panel-theme">
                        <div class="panel-heading">
                            <h2>Pengumuman Lainnya</h2>
                        </div>
                        <div class="panel-body">
                            <ul class="sidebar-list">
                                @if(!empty($pengumuman_random))
                                @foreach ($pengumuman_random as $data_random)
                                @php
                                $text = substr($data_random->body, 0, 350);
                                $date = $data_random->created_at;
                                $tanggal = date('l , d M Y', strtotime($date));
                                @endphp
                                <li>
                                    <a href="{{route('detail_pengumuman', [$data_random->id])}}" title="{{ $data_random->title }}">{{ $data_random->title }}</a>
                                    <ul class="meta">
                                        <li class="post-meta-date"><i class="fa fa-clock-o"></i>{{ $tanggal }}</li>
                                    </ul>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Pengumuman Belum Ada 
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