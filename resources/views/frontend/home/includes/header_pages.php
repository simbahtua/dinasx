<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Komisi Pemilihan Umum Kabupaten Bantaeng</title>

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="MobileOptimized" content="320" />

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->          
    <link href="<?php echo e(asset('web/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES --> 
    <link href="<?php echo e(asset('web/css/imports.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('web/css/custom.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('web/css/responsive.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->

    <!-- JQUERY LIBRARY -->
    <script type='text/javascript' src="<?php echo e(asset('web/js/jquery.min.js')); ?>"></script>
    <!-- JQUERY LIBRARY -->

    <link rel="shortcut icon" href="<?php echo e(asset('web/images/favicon.ico')); ?>" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>

    <!-- Header -->
    <header>
        <div class="main-nav">
            <div class="container">
                <!-- search box -->
                <div id="top-search-box">
                    <form method="get" id="searchform" class="searchform" action="#" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control field field-search" name="s" value="" id="s" placeholder="Pencarian Informasi...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>&nbsp; Cari</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>                 
                </div>
                <!-- search box -->

                <!-- blok companies -->
                <div id="blok-company">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="navbar-brand">
                                <a href="#" class="logo" alt="logo">
                                    <img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="Komisi Pemilihan Umum Kabupaten Bantaeng">
                                </a>
                                <h1 class="navbar-brand-text">Komisi Pemilihan Umum Kabupaten Bantaeng</h1>
                            </div>

                            <div class="collapse navbar-collapse" id="navbar-collapse">
                                <div class="top-info">
                                    <ul class="topmenu">
<!--                                        <li>
                                            <a href="#" class="mail-link">Email</a>
                                        </li>
                                        <li>
                                            <a href="#" class="data-link">Penyimpanan Online</a>
                                        </li>-->
                                    </ul>
                                </div>

                                <ul class="nav navbar-nav navbar-left">
                                    <li class="active"><a href="<?php echo url('/home'); ?>">Beranda</a></li>
                                    <li class="dropdown">
                                        <a href="#">Informasi KPU</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo url('/sejarahkpu'); ?>">Sejarah Pemilu</a></li>
                                            <li><a href="<?php echo url('/visi_misi'); ?>">Visi Misi</a></li>
                                            <li><a href="http://jdih.kpu.go.id/">Produk Hukum</a></li>
                                            <li><a href="#">Pemilu Pilkada</a></li>

                                        </ul>
                                    </li>
                                    <!--<li><a href="<?php //echo url('/kontak'); ?>">Kontak Kami</a></li>-->
                                    
                                    <li class="dropdown">
                                        <a href="#">Informasi Web</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo url('/list_berita'); ?>">Berita</a></li>
                                            <li><a href="<?php echo url('/list_artikel'); ?>">Artikel</a></li>
                                            <li><a href="<?php echo url('/list_pengumuman'); ?>">Pengumuman</a></li>
                                            <li><a href="<?php echo url('/list_agenda'); ?>">Agenda</a></li>
                                            <li><a href="<?php echo url('/list_dokumen'); ?>">Dokumen</a></li>
                                            <li><a href="<?php echo url('/profile_anggota'); ?>">Profil Anggota</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo url('/list_gallery'); ?>">Gallery</a></li>
                                    <li><a href="<?php echo url('/cekdps'); ?>">Cek Data Pemilih</a></li>
                                </ul>
                                
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
                <!-- blok companies -->
            </div>
        </div>       
    </header>
    <!-- /Header -->

   

