@extends('frontend.home.app')
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
                <li class="active">Kontak Kami</li>
            </ol>
        </div>
            <div class="panel-body">
                <div class="row">
                    <!-- main content -->
                    <div class="col-md-12" id="main-content">
                        <div class="widget-post">
                            <div class="post-heading">
                                <h1 class="post-title">Ini Adalah Halaman Kontak</h1>
                                <div class="clearfix"></div>
                                <ul class="meta">
                                    <li class="post-meta-date"><i class="fa fa-clock-o"></i>Selasa, 26 September 2017 16:25 WIB</li>
                                    <li class="post-meta-author"><i class="fa fa-user"></i>Oleh: <a href="#" title="Post Title" rel="author">Admin</a></li>
<!--                                    <li class="post-meta-view"><i class="fa fa-file-text"></i>Dibaca: 3012 Kali</li>
                                    <li class="post-meta-comments comments-scroll"><i class="fa fa-comments"></i><a href="#">0 Komentar</a></li>-->
                                </ul>
                            </div>
                            <div class="post-content">
                                <img src="uploads/news/news-large.jpg" class="img-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi exercitationem vitae esse sunt cumque ab obcaecati hic accusamus, quia, voluptatum quidem! Quia voluptas maiores, aliquid aspernatur, at assumenda vero distinctio!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi exercitationem vitae esse sunt cumque ab obcaecati hic accusamus, quia, voluptatum quidem! Quia voluptas maiores, aliquid aspernatur, at assumenda vero distinctio!</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi exercitationem vitae esse sunt cumque ab obcaecati hic accusamus, quia, voluptatum quidem! Quia voluptas maiores, aliquid aspernatur, at assumenda vero distinctio!</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi exercitationem vitae esse sunt cumque ab obcaecati hic accusamus, quia, voluptatum quidem! Quia voluptas maiores, aliquid aspernatur, at assumenda vero distinctio!</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi exercitationem vitae esse sunt cumque ab obcaecati hic accusamus, quia, voluptatum quidem! Quia voluptas maiores, aliquid aspernatur, at assumenda vero distinctio!</p>

                            </div>
                        </div>
                    </div>

                    <!-- sidebar -->
                    
                </div>
            </div>
        </div>
    </div>
@endsection