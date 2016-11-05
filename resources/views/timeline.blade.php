<!-- resources/views/timeline.blade.phpに保存 -->

@extends('master')

@section('title', 'TimeLine')

@section('content')
    <div class="inner">
        <!-- TimeLine Content -->
        <?php for ($i = 0; $i < $id; $i++) { ?>
            <div class="tl_content">
                <div class="tl_header">
                    <img class="tl_icon" src="">
                    <p><?php echo "Brian" ?></p>
                </div>
                <div class="tl_text">
                    <p><?php echo "あのイーハトーヴォの すきとおった風、 夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモーリオ市、郊外のぎらぎらひかる草の波" ?></p>
                </div>
                <div class="">
                    <img class="tl_img" src="<?php echo "Brian" ?>">
                </div>
                <div class="tl_footer">
                    <p>created at:<?php echo "2016/11/5 14:12:52" ?></p>
                </div>
            </div>
        <?php } ?>

    </div>
@endsection
