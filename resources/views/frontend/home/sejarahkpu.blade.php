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
                <li><a href="#">Sejarah Pemilu</a></li>

            </ol>
        </div>

        <div class="panel-body">
            <div class="row">
                <!-- main content -->
                <div class="col-md-12" id="main-content">
                    <div class="widget-post">
                        <div class="post-heading">
                            <h1 class="post-title">{{ $page_title }} </h1>
                            <div class="clearfix"></div>
                            <ul class="meta">
                            </ul>
                        </div>
                        <div class="post-content">
                            <div class="content_slide">
                                <ul>
                                    @if(!empty($sejarahpemilu))
                                    @foreach ($sejarahpemilu as $row) 
                                    <li><img src="<?php echo e(asset('storage/')); ?>/{{$row->filename}}" alt="Pemerintah Kabupaten Bantaen">
                                    </li>

                                    @endforeach
                                    @else 
                                    <div class="alert alert-info">
                                        Data Sejarah Belum Ada 
                                    </div>
                                    @endif
                                </ul>
                                <div class="nav-slide">
                                    <span class="nav-prev _3rd"></span>
                                    <span class="nav-next _3rd"></span>
                                </div>
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