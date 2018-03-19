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
                <li><a href="active">Profil Anggota</a></li>
                <!--<li class="active">Pengumuman</li>-->
            </ol>

        </div>
        <div class="panel-body">
            <div class="row">
                <!-- main content -->
                <div class="col-md-12" id="main-content">
                    <div class="widget">
                        <div class="panel panel-default panel-theme">
                            <div class="panel-heading">
                                <h2 class="heading-center" style="width: 40%;">{{ $page_title }}</h2>
                            </div>

                            <div class="panel-body">
                                <div class="widget_team_profile">
                                    <ul>
                                        @if(!empty($profile))
                                        @foreach ($profile as $row) 
                                        <li>
                                            <div class="team_img">
                                                <div class="img">
                                                    <img src="<?php echo e(asset('storage/')); ?>/{{$row->file_gambar}}" alt="{{ $row->nama }}"> 
                                                </div>

                                            </div>
                                            <div class="team_info">
                                                <h3>{{ $row->nama }}</h3>
                                                <div class="team_info_content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="team_row">
                                                                <span class="_label">Tempat, Tanggal Lahir</span>
                                                                <span class="_separator">:</span>
                                                                <span class="_info">{{ $row->tempat_lahir }} , {{ $row->tanggal_lahir }}</span>
                                                            </div>
                                                            <div class="team_row">
                                                                <span class="_label">Alamat</span>
                                                                <span class="_separator">:</span>
                                                                <span class="_info">{{ $row->alamat }}</span>
                                                            </div>
                                                            <div class="team_row">
                                                                <span class="_label">Jenis Kelamin</span>
                                                                <span class="_separator">:</span>
                                                                <span class="_info">{{ $row->jenis_kelamin }} </span>
                                                            </div>
                                                            <div class="team_row">
                                                                <span class="_label">Agama </span>
                                                                <span class="_separator">:</span>
                                                                <span class="_info">{{ $row->agama }} </span>
                                                            </div>
                                                            <div class="team_row">
                                                                <span class="_label">Status Perkawinan </span>
                                                                <span class="_separator">:</span>
                                                                <span class="_info">{{ $row->status_pernikahan }} </span>
                                                            </div>
                                                            <div class="team_row">
                                                                <span class="_label">Nama Pasangan </span>
                                                                <span class="_separator">:</span>
                                                                <span class="_info">{{ $row->nama_pasangan }}</span>
                                                            </div>
                                                            <div class="team_row">
                                                                <span class="_label">Jumlah Anak </span>
                                                                <span class="_separator">:</span>
                                                                <span class="_info">{{ $row->jumlah_anak }} Orang </span>
                                                            </div>
                                                            <div class="team_row">
                                                                <span class="_label">Pendidikan Terakhir </span>
                                                                <span class="_separator">:</span>
                                                                <span class="_info">{{ $row->pendidikan }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="team_row full_row">
                                                                <span class="_label">Pekerjaan /Jabatan :</span>
                                                                <span class="_info">
                                                                    <ul class="_infolist">
                                                                        <li>{{ $row->jabatan }}</li>
                                                                    </ul>
                                                                </span>
                                                            </div>

                                                            <div class="team_row full_row">
                                                                <span class="_label">Pengalaman Organisasi :</span>
                                                                <span class="_info">
                                                                    <ul class="_infolist">
                                                                        {!! $row->pengalaman !!}                             
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        @else 
                                        <div class="alert alert-info">
                                            Data Anggota Belum Ada 
                                        </div>
                                        @endif
                                    </ul>

                                    <div class="nav-slide">
                                        <span class="nav-prev _2nd"></span>
                                        <span class="nav-next _2nd"></span>
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
</div>
@endsection