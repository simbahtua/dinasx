<!-- Main Slider -->
<div id="main-slider">

    <div class="container">
        <div class="slide-container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="main-bxslider">
                        @if(!empty($slider))
                        @foreach ($slider as $row)
                        <li><img src="<?php echo e(asset('storage/')); ?>/{{$row->filename}}" style="width: 100%; height: 500px;" alt="{{ $row->title }}"></li>
                        @endforeach
                        @else
                        Data Berita Belum Ada 
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Slider -->
