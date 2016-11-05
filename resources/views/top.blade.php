<!-- resources/views/top.blade.phpに保存 -->

@extends('master')

@section('title', 'Top')

@section('content')
    <div class="inner">
        <?php foreach ($Contents as $Content) { ?>
            <div class="content_around">
                <a href="/content/view/<?php echo $Content->id ?>">
                    <div class="content">
                        <img src="<?php echo $Content->picture1 ?>">
                        <h2><?php echo $Content->title ?></h2>
                        <p><?php echo $Content->name ?></p>
												<?php if(isset($Content->supported) && $Content->supported == true){
													echo "<p>supported</p>";} ?>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
@endsection
