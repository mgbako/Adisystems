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
		    	<h1 class="text-danger">POS Software</h1>
		    </div>

		      <div class="row featurette">
		        <div class="container">
		        	<p>Our Integrated <span class="label label-primary">adA-Pack</span> POS Software is a stream of locally designed and developed Computer Software to cater for all complexity and flexibility required to manage a business outfit such as Supermarkets, Pharmaceutical Stores, Retail and Wholesale Outlets etc. The application is effectively user-friendly, easy-to-use and totally parameter and menu driven with a full set of internal auditing functions that make sure that all data are correctly posted, up-to-date and accurate. </p>
		        	<div class="list-group">
					    <h4>The solution package can be configured, integrated and applied to specific needs including but not limited to:</h4>
					    <p>Sales/Debtor Ledger Control System</p>
					    <p>Stock/Inventory Control System</p>
					    <p>Accounts Payable System</p>
					</div>
		        </div>
		      </div>
<br class="featurette-divider">
		      <div class="row featurette">
		        <div class="col-md-6 mirror">
			        <div class="panel panel-default">
			        	<div class="panel-heading"><h3 class="text-danger">Summary of Features of the Above System</h3></div>
			        	<div class="panel-body">
			        		 <ul>
					          	<li>On the spot collection of receipt without hassles.</li>
								<li>Automatic update of stock card at sales.</li>
								<li>Automatic update of product sales.</li>
								<li>Automatic stock shortage alert.</li>
								<li>Control and monitor of price changes.</li>
								<li>Automatic update of daily sales report.</li>
								<li>Supports retail & wholesale invoicing and receipting.</li>
								<li>Automatic monitor of expired/expiring products.</li>
								<li>Automatic update of stock availability during suppliers invoices data entry.</li>
								<li>Option for automatic link to the General Ledger Accounting System (adA-PACK 5.0) at any desired time.</li>
								<li>Supports multiple cashier or single cashier to multiple product sections in a shop floor.</li>
								<li>Effective password controls as check to unauthorized users.</li>
					          </ul>
			        	</div>
			        </div>
		        </div>
		        <div class="col-md-5">
		          <img class="featurette-image img-responsive center-block thumbnail" src="{!! asset('img/adapos.png') !!}" alt="">
		        </div>
		      </div>
		      <br class="featurette-divider">

		</div><!-- /END THE FEATURETTES -->
	@stop