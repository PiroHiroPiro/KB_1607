<!-- resources/views/timeline.blade.phpに保存 -->

@extends('master')

@section('title', 'TimeLine')

@section('content')
    <!-- TimeLine Content -->
    <?php if (empty($Timelines)) {?>
        <div class="nc-inner">
            <img src="/img/There_is_no_contents_at_the_moment-logo.png" class="no-content">
        </div>
    <?php } else {?>
        <div class="tl-inner">
            <?php foreach ($Timelines as $Timeline) { ?>
                <div class="tl-content">
                    <div class="media tl_header">
                        <div class="media-left">
                            <img src="<?php echo '/img/IAN.JPG'; //$Timeline->picture1 ?>" class="tl-icon">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading tl-name"><?php echo "IAN";//echo $Timeline->name ?></h4>
                            <p class="tl-title"><?php echo $Timeline->title ?></p>
                        </div>
                    </div>
                    <div class="tl-text">
                        <p class="tl-message"><?php echo $Timeline->message ?></p>
                    </div>
                    <div class="tl-imgs">
                        <img class="tl-img" src="<?php echo $Timeline->picture1 ?>">
                    </div>
                    <div class="tl-footer">
                        <p>created at : <?php echo $Timeline->created_at ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php }?>
@endsection
