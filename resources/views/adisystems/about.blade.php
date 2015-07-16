@extends('layouts.master')
	@section('content')

		<div class="navbar">
	      <div class="">
	      	@include('layouts.navbar')
	      </div>
	    </div>

	   <!-- Jumbotron ================================================== -->
	   <div class="jumbotron">
	      <div class="container"><br><p></p><br><br><br><br><br><br><br><br><br>
	        <p><a class="btn btn-primary btn-lg center" href="" role="button">Learn more About Us</a></p>
	      </div>
	    </div>

	    <div class="container marketing">
		    <!-- START THE FEATURETTES -->

		        <div class="row featurette">
			        <div class="col-md-7">
			          <h1 class="text-center text-danger">Adi Systems Limited </h1>
			          <p class="lead">
			          is one of the most trusted & reputable software developer in Nigeria. Our service combines value, speed and reliability with a fanatic customer service that is second to none and aimed at customer satisfaction. When your software, hardware, and network are integrated and designed properly, the workflow and expansion feel natural. Our professionals and their experience take care of the details. We do not only offer technology, we provide solutions customized for your environment to unite your business with customers and vendors. The “Adi Systems Approach” has always revolved around its customers satisfaction. We believe technology starts with your needs, not ours.</p>
			        </div>
		        <div class="col-md-5">
		        <br><br><p></p><br><br>
		          <img class="featurette-image img-responsive center-block" src="{{ asset('img/aboutus.jpg') }}" alt="">
		        </div>
		      </div>

		      <hr class="featurette-divider">

		      <div class="row">
		        <div class="col-md-7 col-md-push-5">
		          <h1 class="text-danger">And <span class="text-muted">we</span></h1>
		          <h2 class="lead">  apply the same approach at all stages of your solution’s life cycle; from the assessment to the delivery and support of your solution. We do not go into our customers site with one <i class="fa fa-eye fa-1x"></i> eye closed. Our Hardware and Software background has made a whole lot of difference in the quality of services we have rendered.</h2>
		        </div>
		        <div class="col-md-5 col-md-pull-7">
		          <img class="featurette-image img-responsive center-block" src="{{asset('img/Point-Of-Sale-POS-SwiftPOS-4.jpg')}}" alt="">
		        </div>
		      </div>
		</div><!-- /END THE FEATURETTES -->
	@stop