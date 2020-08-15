	<!DOCTYPE html>
	<html>
	<?php
	include("connection.php");
	session_start();
	?>
	<head>
		<title>Shoes ordering</title>
		<link rel="stylesheet" type="text/css" href="Homepage.css"></head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>	
	<body>

		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-12">
					<div id="bm" style="background-color: green; color: white; height: 80px">B&M SHOES SHOP</div>
				</div>
			</div>
			<div class="row content" style="height: 600px">
				<div class="col-sm-3 sidenav">
					<h4 id="bm">ADMIN</h4>
					<ul class="nav nav-pills nav-stacked">

						<li><a href="viewcustomer.php">view customer</a></li>
						<li><a href="#">view order</a></li>
					 <li><a href="Add.php">Manage shoes</a></li>
						<li><a href="logout.php">logout</a></li>
					</ul>
					<div class="row">
						<div class="col-sm-12">
					<table class="table table-condensed">

						

							<div class="col-sm-9" style="height: 500px">
								<div class="row">
									<div class="col-sm-12" style="margin-top: 40px;">


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="footer">@copyright2020</div>
				
			</body>
			</html>
