<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EzyHire</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<script src="{{ asset('/js/jquery-3.1.1.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.js') }}"></script>
</head>
<body class="body_bg">
	<div class="heading_bar"><h1 class="header_title">EzyHire</h1></div>
	<nav class="navbar navbar-default custom_nav_bar">

		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="nav_buttons"><a href="{{ url('/') }}" style="color:black;">Home</a></li>
					<li class="nav_buttons"><a href="{{ url('suburbs') }}"  style="color:black;">Suburbs</a></li>
					<li class="nav_buttons"><a href="{{ url('brands') }}"  style="color:black;">Brands</a></li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:black;">Customer
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="nav_buttons"><a href="{{ url('customer/add') }}"  style="color:black;">Add Customer</a></li>
							<li class="nav_buttons"><a href="{{ url('customer/update') }}"  style="color:black;">Update Customer</a></li>
							<li class="nav_buttons"><a href="{{ url('customer/delete') }}"  style="color:black;">Delete Customer</a></li>
							<li class="nav_buttons"><a href="{{ url('customer/bookinglist') }}"  style="color:black;">List Bookings by Customer</a></li>
							<li class="nav_buttons"><a href="{{ url('customer/damagelist') }}"  style="color:black;">List Damages by Customer</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:black;">Vehicle
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="nav_buttons"><a href="{{ url('vehicle/add') }}"  style="color:black;">Add Vehicle</a></li>
							<li class="nav_buttons"><a href="{{ url('vehicle/retire') }}"  style="color:black;">Retire Vehicle</a></li>
							<li class="nav_buttons"><a href="{{ url('vehicle/rateupdate') }}"  style="color:black;">Update Hire Rate</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:black;">Report
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="nav_buttons"><a href="{{ url('report/damage') }}"  style="color:black;">Damage Report</a></li>
							<li class="nav_buttons"><a href="{{ url('report/fault') }}"  style="color:black;">Fault Report</a></li>
						</ul>
					</li>

					<li class="nav_buttons"><a href="{{ url('archive') }}" style="color:black;">Archive</a></li>
					<li class="nav_buttons"><a href="{{ url('register') }}" style="color:black;">Register</a></li>
					<li class="nav_buttons"><a href="{{ url('login') }}">Login</a></li>
					<li class="nav_buttons"><a href="{{ url('logout') }}">Logout</a></li>
				</ul>
			</div>

		</div>

	</nav>

	@yield('content')

	<div class="panel-footer">
		<p class="copyright">EzyHire</p>
	</div>

	<!-- Scripts -->

</body>
</html>
