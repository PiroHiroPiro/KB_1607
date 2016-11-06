<!-- resources/views/top.blade.phpに保存 -->

@extends('master')

@section('title', 'Top')

@section('content')
    <!-- content -->
    <div class="inner">
        <?php foreach ($Contents as $Content) { ?>
            <div class="content-around">
                <a href="/content/view/<?php echo $Content->id ?>">
                    <div class="content">
                        <img src="<?php echo $Content->picture1 ?>">
                        <div class="support">
                            <?php if(isset($Content->supported) && $Content->supported == true) { ?>
                                <span class="label label-info">応援中 <i class="fa fa-child"></i></span>
                            <?php } ?>
                        </div>
                        <h2><?php echo $Content->title ?></h2>
                        <p><?php echo $Content->name ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
@endsection
