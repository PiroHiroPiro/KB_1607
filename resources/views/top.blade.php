<!-- resources/views/top.blade.phpに保存 -->

@extends('master')

@section('title', 'Top')

@section('content')
    <div class="inner">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <div class="content">
                <img src="<?php echo "img/IAN.JPG" ?>">
                <h2><?php echo "Plz money!" ?></h2>
                <p><?php echo "Brian" ?></p>
            </div>
        <?php } ?>
    </div>
@endsection
