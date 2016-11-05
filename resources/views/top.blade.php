<!-- resources/views/top.blade.phpに保存 -->

@extends('master')

@section('title', 'Top')

@section('content')
    <div class="inner">
        <?php foreach ($Contents as $Content) { ?>
            <a href="/contents/<?php echo ?>">
                <div class="content">
                    <img src="<?php echo $Content->picture1 ?>">
                    <h2><?php echo $Content->title ?></h2>
                    <p><?php echo $Content->name ?></p>
                </div>
            </a>
        <?php } ?>
    </div>
@endsection
