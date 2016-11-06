<!-- resources/views/content.blade.phpに保存 -->

@extends('master')

@section('title', 'Content')

@section('head')
    <link rel="stylesheet" href="{{{asset('css/content.css')}}}">
@endsection

@section('content')
    <div class="inner">

        <!-- image slide -->
        <div id="wrapper">
            <input type="radio" name="slideshow" id="switch1" checked>
            <input type="radio" name="slideshow" id="switch2">
            <input type="radio" name="slideshow" id="switch3">
            <input type="radio" name="slideshow" id="switch4">
            <input type="radio" name="slideshow" id="switch5">
            <div id="slideshow">
                <div class="slideContents">
                    <section id="slide1">
                        <img src="<?php echo $Content->picture1; ?>">
                    </section>
                    <section id="slide2">
                        <img src="<?php echo $Content->picture2; ?>">
                    </section>
                    <section id="slide3">
                        <img src="<?php echo $Content->picture3; ?>">
                    </section>
                    <section id="slide4">
                        <img src="<?php echo $Content->picture4; ?>">
                    </section>
                    <section id="slide5">
                        <img src="<?php echo $Content->picture5; ?>">
                    </section>
                </div>
                <p class="arrow prev">
                    <i class="ico"></i>
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <label for="switch5"></label>
                </p>
                <p class="arrow next">
                    <i class="ico"></i>
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <label for="switch5"></label>
                </p>
            </div>
        </div>

        <!-- description -->
        <div class="description">
              <h1><span>Title</span></h1>
              <p class="titlee"><?php echo $Content->title; ?></p>
              <h1><span>Name</span></h1>
              <p class="na"><?php echo $Content->name; ?></p>
              <h1><span>Introduction</span></h1>
              <p class="intro"><?php echo $Content->description; ?></p>
        </div>

        <!-- button -->
        @if (Auth::guest())
            <button type="button" class="btn button" onclick="location.href='/auth/login'">
                <i class="fa fa-gift"></i>  応援する  <i class="fa fa-gift"></i>
            </button>
        @else
            <button type="button" class="btn button" data-toggle="modal" data-target="#postModal">
                <i class="fa fa-gift"></i>  応援する  <i class="fa fa-gift"></i>
            </button>
        @endif

        <!-- modal -->
        <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="postModalLabel">応援する金額を決めてください</h4>
                    </div>
                    <div class="modal-body">
                        <div class="btn-group" role="group">
                            <form method="POST" action="/content/support">
                                <div class="money-form-body">
                                    {!! csrf_field() !!}
                                    <input type="hidden" class="form-control" name="content_id" value="<?php echo $Content->id; ?>">
                                    <input type="number" class="form-control money-form" name="money" placeholder="1000" min="1" required="true"><span>円</span>
                                </div>
                                <button type="submit" class="btn button"><i class="fa fa-gift"></i>  応援する  <i class="fa fa-gift"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
