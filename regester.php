<!DOCTYPE html>
<html>
<?php
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
			var address = document.getElementById('add').value;
			var email = document.getElementById('mail').value;
			var phone = document.getElementById('phone').value;
			var password = document.getElementById('password').value;
			var username = document.getElementById('username').value;
			var gender = document.getElementById('gender').value;
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
			if (phone=="") {
				alert("fill phone")
			}
			if (password=="") {
				alert("fill password")
			}
			if (username=="") {
				alert("fill username")
			}
			if (gender=="") {
				alert("fill gender")
			}
		}
		if (country=="") {
			alert("fill country")
		}
		if (female.checked==false && male.checked==false) {
			alert("you must select female or male");
			return false;
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

						<form action="registerhandler.php" method="POST" class="form-horizontal" role="form">
							<div class="form-group">
								<label class="control-label col-sm-2">FULL NAME:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter FullName" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">ADDRESS:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="address" id="add" placeholder="Enter Address" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">EMAIL:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="email" id="mail" placeholder="Enter Email" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">PHONENUMBER:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter PHONENUMBER" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Password:</label>
								<div class="col-sm-6">
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-sm-2">USERNAME:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">GENDER:</label>
								<div class="col-sm-6">
									<input type="radio" name="Gender" id="gender" required>MALE
									<input type="radio" name="Gender" id="gender" required>FEMALE
								</div>
							</div>
							
							<div class="form-group" style="width: 50%; margin-left: 17%">
								<select class="form-control" name="country" id="country" required>
									<option value="">--COUNTRY--</option>
									<option value="unguja">UNGUJA</option>
									<option value="pemba">PEMBA</option>
									<option value="tanganyika">TANGANYIKA</option>
								</select>
							</div>


							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" onclick= "return validate()" name="submit" style="width: 20%" class="btn btn-info">Register</button>

								</div>
							</div>
						</div>

					</body>
					</html>