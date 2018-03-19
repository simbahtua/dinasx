@include('frontend.home.includes.header')
@include('frontend.home.includes.slider')

<!-- Main -->
<section id="main-container">
    <div class="container">
        <!-- Section 1 -->
        <div class="row">
            <div class="col-md-6">
                <div class="article-list" id="widget-news">
                    <div class="panel panel-default panel-theme">
                        <div class="panel-heading">
                            <h2>Berita Terkini</h2>
                        </div>
                        <div class="panel-body">

                            <ul class="headlines">
                                @if(!empty($berita))
                                @foreach ($berita as $row_berita)
                                @php
                                $text = substr($row_berita->body, 0, 350);
                                $date = $row_berita->created_at;
                                $tanggal = date('l , d M Y', strtotime($date));
                                @endphp

                                <li>
                                    <div class="img"><img src="<?php echo e(asset('storage/')); ?>/{{$row_berita->image}}" alt="{{ $row_berita->title }}"></div>
                                    <a href="{{route('detail_berita', [$row_berita->id])}}" class="headline-title" title="{{ $row_berita->title }}">{{ $row_berita->title }}</a>
                                    <span class="meta">{{ $tanggal }}</span>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Berita Belum Ada 
                                </div>
                                @endif
                            </ul>

                            <h3 class="clr-heading">Berita Lainnya</h3>
                            <ul class="list-other">
                                @if(!empty($berita_random))
                                @foreach ($berita_random as $row_berita_random)
                                @php
                                $text = substr($row_berita_random->body, 0, 350);
                                $date = $row_berita_random->created_at;
                                $tanggal = date('l , d M Y', strtotime($date));
                                @endphp

                                <li>
                                    <a href="{{route('detail_berita', [$row_berita_random->id])}}" class="headline-title" title="article title">{{ $row_berita_random->title }}</a>
                                    <span class="meta">{{ $tanggal }}</span>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Berita Belum Ada 
                                </div>
                                @endif
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="<?php echo url('/list_berita'); ?>" class="more-link">Berita Selengkapnya &nbsp;&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="article-list" id="widget-article">
                    <div class="panel panel-default panel-theme">
                        <div class="panel-heading">
                            <h2>Artikel</h2>
                        </div>
                        <div class="panel-body">
                            <ul class="headlines">
                                @if(!empty($artikel))
                                @foreach ($artikel as $row_artikel)
                                @php
                                $text = substr($row_artikel->body, 0, 350);
                                $date = $row_artikel->created_at;
                                $tanggal = date('l , d M Y', strtotime($date));
                                @endphp

                                <li>
                                    <div class="img"><img src="<?php echo e(asset('storage/')); ?>/{{$row_artikel->image}}" alt="{{ $row_artikel->title }}"></div>
                                    <a href="{{route('detail_artikel', [$row_artikel->id])}}" class="headline-title" title="{{ $row_artikel->title }}">{{ $row_artikel->title }}</a>
                                    <span class="meta">{{ $tanggal }}</span>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Artikel Belum Ada 
                                </div>
                                @endif
                            </ul>

                            <h3 class="clr-heading">Artikel Lainnya</h3>
                            <ul class="list-other">
                                @if(!empty($artikel_random))
                                @foreach ($artikel_random as $row_artikel_random)
                                @php
                                $text = substr($row_artikel_random->body, 0, 350);
                                $date = $row_artikel_random->created_at;
                                $tanggal = date('l , d M Y', strtotime($date));
                                @endphp

                                <li>
                                    <a href="{{route('detail_artikel', [$row_artikel_random->id])}}" class="headline-title" title="article title">{{ $row_artikel_random->title }}</a>
                                    <span class="meta">{{ $tanggal }}</span>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Artikel Belum Ada 
                                </div>
                                @endif
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="<?php echo url('/list_artikel'); ?>" class="more-link">Artikel Selengkapnya &nbsp;&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row">
            <div class="col-md-12">
                <div id="widget-sitelink">
                    <div class="panel panel-default panel-theme">
                        <div class="panel-heading">
                            <h2 class="heading-center">Gallery</h2>
                        </div>
                        <div class="panel-body">
                            <ul>
                                @if(!empty($gallery))
                                @foreach ($gallery as $row_gallery)
                                <li>
                                    <a href="#" title="Title Link">
                                        <img src="<?php echo e(asset('storage/')); ?>/{{$row_gallery->file}}" alt="{{ $row_gallery->title }}">
                                        <!--<img src="web/images/links/banner-hukum.png" alt="img title">-->
                                        <h4>{{ $row_gallery->title }}</h4>
                                    </a>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Gallery Belum Ada 
                                </div>
                                @endif
                            </ul>

                            <div class="nav-slide">
                                <span class="nav-prev _1st"></span>
                                <span class="nav-next _1st"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="row">
            <div class="col-md-6">
                <div class="article-list" id="widget-info">
                    <div class="panel panel-default panel-theme">
                        <div class="panel-heading">
                            <h2>Pengumuman</h2>
                        </div>
                        <div class="panel-body">
                            <ul class="list-info">
                                @if(!empty($pengumuman))
                                @foreach ($pengumuman as $row_pengumuman)
                                @php
                                $date = $row_pengumuman->created_at;
                                $tanggal = date('l , d M Y', strtotime($date));
                                @endphp
                                <li>
                                    <a href="{{route('detail_pengumuman', [$row_pengumuman->id])}}" class="headline-title" title="{{ $row_pengumuman->title }}">{{ $row_pengumuman->title }}</a>
                                    <span class="meta">{{ $tanggal }}</span>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Pengumuman Belum Ada 
                                </div>
                                @endif
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="<?php echo url('/list_pengumuman'); ?>" class="more-link">Pengumuman Selengkapnya &nbsp;&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="article-list" id="widget-info">
                    <div class="panel panel-default panel-theme">
                        <div class="panel-heading">
                            <h2>Agenda</h2>
                        </div>
                        <div class="panel-body">
                            <ul class="list-info">
                                @if(!empty($agenda))
                                @foreach ($agenda as $row_agenda)
                                @php
                                $date = $row_agenda->start_date;
                                $tanggal = date('l , d M Y', strtotime($date));
                                @endphp
                                <li>
                                    <a href="{{route('detail_agenda', [$row_agenda->id])}}" class="headline-title" title="{{ $row_agenda->title }}">{{ $row_agenda->title }}</a>
                                    Tempat : {{ $row_agenda->place }}                                   
                                    <span class="meta">Tanggal : {{ $tanggal }}</span>
                                </li>
                                @endforeach
                                @else 
                                <div class="alert alert-info">
                                    Data Agenda Belum Ada 
                                </div>
                                @endif
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="<?php echo url('/list_agenda'); ?>" class="more-link">Agenda Selengkapnya &nbsp;&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="article-list" id="widget-lpse">
                    <div class="panel panel-default panel-theme">
                        <div class="panel-heading">
                            <h2 class="heading-center">Informasi Dokumen</h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="lpse-wrap">
                                        <div class="lpse-mid">
                                            <span class="fa fa-copy"></span>
                                            <h3>File <b>Dokumen Komisi Pemilihan Umum</b></h3>
                                            <a href="#" class="btn btn-default">Dokumen Selengkapnya &nbsp;&raquo;</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-info">
                                        @if(!empty($dokumen))
                                        @foreach ($dokumen as $row_dokumen)
                                        @php
                                        $date = date('d-m-Y');
                                            $file = json_decode($row_dokumen->filename);
                                            $download_link = $file[0]->download_link;
                                        @endphp
                                        <li>
                                            <a href="<?php echo e(asset('storage/')); ?>/{{$download_link}}" download="{{ $row_dokumen->title }}_{{$date}}" class="headline-title" target="_blank" title="{{ $row_dokumen->title }}">{{ $row_dokumen->title }}</a>                                            
                                        </li>
                                        @endforeach
                                        @else 
                                        <div class="alert alert-info">
                                            Data Dokumen Ada 
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
    </div>
</section>
<!-- /Main -->
@include('frontend.home.includes.footer')