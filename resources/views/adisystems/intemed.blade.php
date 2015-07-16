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
		    	<h1 class="text-danger">Hospital Management Software (iNTEMEDS)</h1>
		    </div>

		      <div class="row featurette">
		        <div class="container">
		        	<p>Our Integrated Hospital Management System <span class="label label-primary">(iNTEMEDS)</span> is a stream of locally designed and developed Computer Software to cater for all complexity and flexibility required to manage a medical practice – valuable financial and professional data readily available, with minimum hassle, to authorized personnel when required. The systems are designed to fit into small clinics, large hospitals, diagnostic centers and Hospital Groups.</p>
		        </div>
		      </div>
<br class="featurette-divider">
		      <div class="row featurette">
		      	<div class="col-md-4">
		          <img class="featurette-image img-responsive center-block img-thumbnail" src="{!! asset('img/intemeds.png') !!}" alt="">
		        </div>
		        <div class="col-md-7 mirror">
			        <div class="panel panel-default">
			        	<div class="panel-heading"><h3 class="text-danger">They include the following:</h3></div>
			        	<div class="panel-body">
			        		 <ul>
					          	<li>Medical Records & Billing System</li>
								<li>Stock/Inventory Control System</li>
								<li>Human Resources Management System(Personnel/Payroll)
</li>
								<li>Fixed Assets Management System</li>
								<li>General Ledger Accounting System</li>
								<li>Enterprise Information System (EIS)</li>
								<li>Accounts Payable System</li>
					          </ul>
			        	</div>
			        </div>
		        </div>
		      </div>
		      <br class="featurette-divider">

		</div><!-- /END THE FEATURETTES -->
	@stop