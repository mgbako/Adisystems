@extends('layouts.master')
	@section('content')

		<div class="navbar">
	      <div class="">
	      	@include('layouts.navbar')
	      </div>
	    </div>

	   <!-- Jumbotron ================================================== -->
	   <div class="container">
	      <iframe class="center-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0616874304774!2d3.321011599999987!3d6.51387660000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8e928428f845%3A0xd58839619d4fd93!2s156+Okota+Rd%2C+Lagos!5e0!3m2!1sen!2sng!4v1423818828634" width="100%" height="400" frameborder="0" style="border:0"></iframe>
	    </div>

	    <div class="container">
		    <!-- START THE FEATURETTES -->

		        <div class="row"><br>
			        <div class="col-md-6">
			          <div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							@include('errors.list')

							{!! Form::open(['route'=>'posts.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}
								<div class="form-group">
									<div class="col-md-12">
										{!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name'])!!}
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										{!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email'])!!}
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										{!!Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Phone'])!!}
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										{!!Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'Message'])!!}
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-12">
										{!!Form::submit('Send', ['class'=>'btn btn-primary btn-lg'])!!}
									</div>
								</div>
							{!!Form::close()!!}
					
						</div>
					  </div>
			        </div>

			        <div class="col-md-6">
			        	<div class="panel panel-primary">
							<div class="panel-heading"><h5 class="text-center">GET IN TOUCH</h5></div>
							<div class="panel-body">
								<p>Please fill in the form to the left and we will get in touch with you as soon as possible. If you have an urgent support request, call us on the number provided below.</p>
							</div>
						</div>

						<div class="panel panel-primary">
							<div class="panel-heading"><h5 class="text-center">OUR OFFICE</h5></div>
							<div class="panel-body">
								<p><b><i class="fa fa-location-arrow"></i> Address:</b> 156, Okota Road, Opposite Oakland School, Okota-Isolo, Lagos.</p>
							    <p><i class="fa fa-phone"></i> <b>Phone:</b> 080-3529-5090, 080-2303-2959, 080-7718-5893</p>
							    <p><i class="fa fa-envelope-o"></i> <b>Email:</b><a href="#"> info@adisystems-ng.com</a></p>
							</div>
						</div>

						<div class="panel panel-primary">
							<div class="panel-heading"><h5 class="text-center">BUSINESS HOUR</h5></div>
							<div class="panel-body">
								<p><b><i class="fa fa-clock-o"></i> Monday - Friday 8am to 5pm</b></p>
							</div>
						</div>

			        </div>
		      </div>
		</div><!-- /END THE FEATURETTES -->
	@stop