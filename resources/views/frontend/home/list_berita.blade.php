@extends('frontend.home.app')
@section('content')
<div class="page_header_wrap" style="background: url(<?php echo e(asset('web/images/bg-header.jpg')); ?>) center -25px no-repeat">
    <div class="container">
        <h2 class="page_category">{{ $page_title }}</h2>
    </div>
</div>   
<div class="container">


    <div class="panel panel-default panel-content">
        <div class="panel-heading">
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">List Berita</a></li>
                <li class="active">Berita</li>
            </ol>

        </div>
        <div class="panel-body">
            <div class="row">
                <!-- main content -->
                <div class="col-md-8" id="main-content">
                    <div class="widget-post">
                        <div class="post-heading">
                            <h1 class="post-title">Berita Terkini</h1>
                        </div>
                        <div class="post-list">
                            <ul>                                
                                @if(!empty($data))
                                @foreach ($data as $row)
                                @php
                                $text = substr($row->body, 0, 350);
                                $date = $row->created_at;
                                $hari = date('l', strtotime($date)); 
                                $tanggal = date('d M Y', strtotime($date));  
                                @endphp
                                <li>
                                    <div class="list-head">
                                        <div class="list-post-date">
                                            <span class="dates">
                                                <strong>{{$hari}}</strong>
                                                {{$tanggal}}
                                            </span>
                                        </div>
                                        <!--                                        <div class="list-post-date">
                                                                                    
                                                                                </div>-->
                                        <div class="list-post-title">
                                            <h3><a href="#" title="{{ $row->title }}">{{ $row->title }}</a></h3>
                                            <ul class="meta">
                                                <li class="post-meta-author"><i class="fa fa-user"></i>Oleh: <a href="#" title="Post Title" rel="author">{{ $row->name }}</a></li>
<!--                                                <li class="post-meta-view"><i class="fa fa-file-text"></i>Dibaca: 3012 Kali</li>
                                                <li class="post-meta-comments comments-scroll"><i class="fa fa-comments"></i><a href="#">0 Komentar</a></li>-->
                                                |  <strong>{{ $hari }}</strong> , {{ $tanggal }}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-post-img">
                                            <a href="#" title="{{ $row->title }}" class="loop-entry-thumbnail"><img src="<?php echo e(asset('storage/')); ?>/{{$row->image}}" alt="{{ $row->title }}"></a>
                                        </div>
                                        <div class="list-post-data">
                                            <p>{{ strip_tags($text) }}...</p>
                                            <p><a href="{{route('detail_berita', [$row->id])}}" title="Baca Selengkapnya : Dinas Kominfo Gelar Bimtek Operasional Aplikasi e-SPM" class="btn btn-default btn-sm">Selengkapnya</a></p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Berita Belum Ada 
                                </div>
                                @endif
                            </ul>

                            <ul class="pagination">
                                {!! $data->render() !!} 
                            </ul>
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