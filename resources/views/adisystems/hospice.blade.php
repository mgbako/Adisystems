@extends('layouts.master')
	@section('content')

		<div class="navbar">
	      <div class="">
	      	@include('layouts.navbar')
	      </div>
	    </div>
	   
	    <div class="container marketing">

		    <!-- START THE FEATURETTES -->
			<div class="page-header">
		    	<h1 class="text-danger">Hotel Management Software (Hospice)</h1>
		    </div>

		      <div class="row featurette">
		        <div class="container">
		        	<p>Our Integrated Hotel Management Software <span class="label label-primary">Hospice</span>  is a stream of locally designed and developed computer software to cater for all complexity and flexibility required to manage a hotel, valuable financial and management information readily available, with minimum hassles, to authorized personnel when required. The systems are designed to fit into small and large Hotels.</p>
		        </div>
		      </div>
<br class="featurette-divider">
		      <div class="row featurette">
		        <div class="col-md-6 mirror">
			        <div class="panel panel-default">
			        	<div class="panel-heading"><h3 class="text-danger">The software include the following:</h3></div>
			        	<div class="panel-body">
			        		 <ul>
								<li>Front Desk/Sales Ledger Control System</li>
								<li>Purchases/Creditors Ledger System</li>
								<li>Stock Control System</li>
								<li>Human Resources Management System</li>
								<li>Fixed Assets Management System</li>
								<li>General Ledger Accounting System</li>
					          </ul>
			        	</div>
			        </div>
		        </div>
		        <div class="col-md-5">
		          <img class="featurette-image img-responsive center-block thumbnail" src="{!! asset('img/Hospice.png') !!}" alt="">
		        </div>
		      </div>
		      <br class="featurette-divider">
		      <div class="row featurette">
		        <div class="container">
		        	<p>These programs have been carefully designed to work in a stand-alone system or in a multi-user environment and they can be purchased and used separately or as integrated software.</p>
		        </div>
		      </div>

		</div><!-- /END THE FEATURETTES -->
	@stop