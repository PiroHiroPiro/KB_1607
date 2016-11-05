<!-- resources/views/content.blade.phpに保存 -->

@extends('master')

@section('title', 'Content')

@section('head')
	<link rel="stylesheet" href="{{{asset('css/content.css')}}}">
@endsection

@section('content')

	<!-- <div class="image">
		<img src="/img/000.jpeg" class="gazou"/>
	</div> -->

	<div class="inner">
	    <div id="wrapper">
	      <input type="radio" name="slideshow" id="switch1" checked>
	      <input type="radio" name="slideshow" id="switch2">
	      <input type="radio" name="slideshow" id="switch3">
	      <input type="radio" name="slideshow" id="switch4">
	      <input type="radio" name="slideshow" id="switch5">
	      <div id="slideshow">
	        <div class="slideContents">
	          <section id="slide1">
	            <img src="/img/lgf01a201402090600.jpg">
	          </section>
	          <section id="slide2">
	            <img src="/img/gatag-00009356.jpg">
	          </section>
	          <section id="slide3">
	            <img src="/img/3.jpg">
	          </section>
	          <section id="slide4">
	            <img src="/img/IAN.jpg">
	          </section>
	          <section id="slide5">
	            <img src="/img/IAN.jpg">
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


	    <div class="description">
	    	<div class="description-item">
	    		<div class="titlee">
		      		<div class="ti"><h1><i class="fa fa-tag" aria-hidden="true"></i><br>Title</h1></div>
		      		<div><p>title<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p></div>
		      	</div>
		     </div>


		     <div class="description-item">
		     	<div class="namee">
		     		<div><p>name<br></p></div>
		      		<div class="na"><h1><i class="fa fa-tag" aria-hidden="true"></i><br>Name</h1></div>
		      	</div>
		    </div>


		    <div class="description-item">
		    	<div class="introduce">
		      		<div class="intro"><h1><i class="fa fa-tag" aria-hidden="true"></i><br>Introduce</h1></div>
		      		<div><p>introduce</p></div>
		      	</div>
		    </div>
	    </div>

	    <div class="btn-group" role="group">
	        <button type="button" class="btn button"><i class="fa fa-gift"></i>  応援する  <i class="fa fa-gift"></i></button>

<!-- <a href="#" class="btn">Purchase Tickets</a> -->
	    

	        <!-- <p><a class="btn btn-white btn-lg btn-ghost" href="#" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Learn more</a></p> -->
	    </div>
	       <!-- <img src="/img/b_simple_115_0L.png" class="gazouwaku"/> -->
	</div>
@endsection