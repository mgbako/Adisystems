<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><i class="fa fa-home"></i> Adi Systems Limited</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="/about">About</a></li>
				<li><a href="/contact"><i class="fa fa-phone"></i> Contact</a></li>
				<li class="dropdown">
				<a href="/products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/products/pos">POS Software (adA-PACK)</a></li>
						<li class="divider"></li>
						<li><a href="/products/intemed">Hospital Management Software (iNTEMEDS)</a></li>
						<li class="divider"></li>
						<li><a href="/products/hospice">Hotel Management Software (Hospice)</a></li>
						<li class="divider"></li>
						<li><a href="/products/adapack">Accounting/ERP Software (adA-PACK)</a></li>
						<li class="divider"></li>
						<li><a href="/products/infertility">Infertility/Assisted Conception Info System (ICIS)</a></li>
					</ul>
				</li>
				<li><a href="/blog">Blog</a></li>
			</ul>{{-- End of Left side of Nav --}}

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('/auth/login') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-sign-in"></i> Login</a></li>
					<li><a href="{{ url('/auth/register') }}">Register</a></li>
				@else
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">{{ Auth::user()->username }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>{{-- End of Right side of Nav --}}
		</div>
	</div>
</nav>