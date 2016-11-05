<!-- resources/views/timeline.blade.phpに保存 -->

@extends('master')

@section('title', 'TimeLine')

@section('content')
    <div class="inner">
        <!-- TimeLine Content -->
        <?php foreach ($Timelines as $Timeline) { ?>
            <div class="tl_content">
                <div class="tl_header">
                    <img class="tl_icon" src="">
                    <p><?php echo $Timeline->name ?></p>
                </div>
                <div class="tl_text">
                    <p><?php echo $Timeline->message ?></p>
                </div>
                <div class="">
                    <img class="tl_img" src="<?php echo $Timeline->picture1 ?>">
                </div>
                <div class="tl_footer">
                    <p>created at:<?php echo $Timeline->created_at ?></p>
                </div>
            </div>
        <?php } ?>

    </div>
@endsection
