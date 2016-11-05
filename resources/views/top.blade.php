<!-- resources/views/top.blade.phpに保存 -->

@extends('master')

@section('title', 'Top')

@section('content')
    <div class="inner">
        <?php foreach ($Contents as $Content) { ?>
            <div class="content">
                <img src="<?php echo $Content->picture1 ?>">
                <h2><?php echo $Content->message ?></h2>
                <p><?php echo $Content->name ?></p>
            </div>
        <?php } ?>
    </div>
@endsection
