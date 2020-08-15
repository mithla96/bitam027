<!DOCTYPE html>
<html>
<?php
include("connection.php");
session_start();
?>
<head>
	<title>regester</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="cs/bootstrap.min.v3.css">
	<link rel="stylesheet" href="cs/style.css">
	<link rel="stylesheet" href="cs/w3.css">
	<link rel="icon" href="#" type="image/x-icon">

					<script type="text/javascript">
				function validate(){
			var name = document.getElementById('name').value;
			var address = document.getElementById('adress').value;
			var email = document.getElementById('emai').value;
			var password = document.getElementById('password').value;
			var username = document.getElementById('username').value;
			var Gender = document.getElementById('Gender').value;
			var country = document.getElementById('country').value;
			if (name=="") {
				alert("plese fill this information")
			}
			if (address=="") {
				alert("plese fill address")
			}
			if (email=="") {
				alert("fill email")
			}
			if (password=="") {
				alert("fill password")
			}
			if (username=="") {
				alert("fill username")
			}
			if (country=="") {
				alert("fill country")
			}
			if (female.checked==false && male.checked==false) {
				alert("you must select female or male");
				return false;
			}
			
		}

					</script>
</head>


<body>


	<div class="row col-md-9 col-md-offset-1">
		<div class="panel panel-primary">

<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div id="bm" style="background-color: green; color: white; height: 70px">B&M SHOES SHOP</div>
			</div>

			</div>

			<div class="panel-body">
				<div style="margin-left:16%";>

					<form action="orderhandler.php" method="POST" class="form-horizontal" role="form">
						<div class="form-group">
							<label class="control-label col-sm-2">QUANTITY:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="quantinty" placeholder="Enter FullName">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2">PRICE:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="price" placeholder="Enter Address">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2">COLOUR:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="colour" placeholder="Enter Email">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2">SIZES:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="sizes" placeholder="Enter size">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2">BRAND:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="brand" placeholder="Enter brand">
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-sm-2">PICTURE:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="picture" placeholder="Enter your username">
							</div>
					

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit"  onclick= "return validate()" name="submit" style="width: 20%">Register</button>

							</div>
						</div>
					</div>

		<div class=" panel-footer text-center">
			<p id="footer">@copyright2020</p>
		</div>

</body>
</html>