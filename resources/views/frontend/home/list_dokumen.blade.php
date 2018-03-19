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
                <li class="active">Dokumen</li>                
            </ol>
        </div>

        <div class="panel-body">
            <div class="row">
                <!-- main content -->
                <div class="col-md-12" id="main-content">
                    <div class="widget-post">
                        <div class="post-heading">
                            <h1 class="post-title">File Dokumen</h1>
                        </div>
                        <div class="post-list">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama File</th>
                                        <th style="text-align: center">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($dokumen))
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($dokumen as $row_dokumen)
                                    @php

                                    $date = date('d-m-Y');
                                    $file = json_decode($row_dokumen->filename);
                                    $download_link = $file[0]->download_link;
                                    @endphp
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row_dokumen->title }}</td>
                                        <td style="text-align: center"><a href="<?php echo e(asset('storage/')); ?>/{{$download_link}}" download="{{ $row_dokumen->title }}_{{$date}}" class="headline-title" target="_blank" title="{{ $row_dokumen->title }}"><i class="fa fa-cloud-download" aria-hidden="true"></i></a> </td>
                                    </tr>
                                    @endforeach
                                    @php
                                    $no++;
                                    @endphp
                                    @else 
                                <div class="alert alert-info">
                                    Data Dokumen Belum Ada 
                                </div>
                                @endif
                                </tbody>
                            </table>

                            <ul class="pagination">
                                {!! $dokumen->render() !!} 
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