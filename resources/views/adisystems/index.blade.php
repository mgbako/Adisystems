@extends('layouts.master')
	@section('content')

		<div class="navbar-wrapper">
	      <div class="container">
	      	@include('layouts.navbar')
	      </div>
	    </div>

	   <!-- Carousel ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	      </ol>

	      {{-- Wrapper for Slides --}}
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img class="first-slide" src="img/banner/pos2.png" alt="First slide">
	        </div>
	        <div class="item">
	          <img class="second-slide" src="img/banner/banner2.2.png" alt="Second slide">
	        </div>
	        <div class="item">
	          <img class="third-slide" src="img/banner/banner6.3.png" alt="Third slide">
	      	</div>

	      	{{-- Controls --}}
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div><!-- /.carousel -->

	    <div class="container marketing">
	    	<hr class="featurette-divider">
	    	<!-- Three columns of text below the carousel -->
		      <div class="row">
		      	<h1 class="text-center text-info">Our Products</h1>
		        <div class="col-lg-4">
		          <img class="img-circle" src="{{asset('img/products/ada-PACK.jpg')}}" alt="Generic placeholder image" width="140" height="140">
		          <h2>ada-PACK</h2>
		          <p> is a stream of locally designed and developed Computer Software to cater for all complexity and flexibility required to manage a business outfit</p>
		          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4">
		          <img class="img-circle" src="{{asset('img/products/INTERMEDS.jpg')}}" alt="Generic placeholder image" width="140" height="140">
		          <h2>INTEMEDS</h2>
		          <p>Our Integrated Hospital Management System (iNTEMEDS) is a stream of locally designed and developed Computer Software to cater for all complexity and flexibility required to manage a medical practice</p>
		          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4">
		          <img class="img-circle" src="{{asset('img/products/hospice.jpg')}}" alt="Generic placeholder image" width="140" height="140">
		          <h2>Hospice</h2>
		          <p>Our Integrated Hotel Management Software (Hospice) is a stream of locally designed and developed computer software to cater for all complexity and flexibility required to manage a hotel,</p>
		          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		        </div><!-- /.col-lg-4 -->
		      </div><!-- /.row -->

		    <!-- START THE FEATURETTES -->

		      <hr class="featurette-divider">

		      <div class="row featurette">
		        <div class="col-md-7">
		          <h1 class="">
		          	We do not only offer technology, <span class="text-muted">we provide solutions customized for your environment to unite your business with customers and vendors.</span>
		          	</h1>
		          	
		          <p class="text-center"><a href="/about" class="btn btn-primary btn-lg">About Us.</a></p>
		        </div>
		        <div class="col-md-5">
		          <img class="featurette-image img-responsive center-block thumbnail" src="img/handshake.jpg" alt="">
		        </div>
		      </div>

		      <hr class="featurette-divider">

		      <div class="row featurette">
		        <div class="col-md-7 col-md-push-5">
		          <h2 class="">Our Mission <span class="text-muted">is.</span></h2>
		          <h2 class="lead"> To develop a customized and functional software that can stand the test of time.</h2>
		        </div>
		        <div class="col-md-5 col-md-pull-7">
		          <img class="featurette-image img-responsive center-block" src="{{asset('img/hp.jpg')}}" alt="">
		        </div>
		      </div>
		</div><!-- /END THE FEATURETTES -->
	@stop