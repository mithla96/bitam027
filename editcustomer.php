<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>


<?php

	include("connection.php");
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

	
</head>


<body>

	<?php
 $sql="SELECT * FROM customer WHERE Costomer_id=:Costomer_id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array('Costomer_id'=>$_GET["Costomer_id"]));
  $ft = $stmt->fetch(PDO::FETCH_ASSOC);

?>
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
						<form action="#" method="POST" class="form-horizontal" role="form" >
							<div class="form-group">
								<label class="control-label col-sm-2">FULL NAME:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter FullName" value="<?php echo $ft['costomer_name']; ?>">
									<input type="hidden" class="form-control" name="Costomer_id"  placeholder="Enter FullName" value="<?php echo $ft['Costomer_id']; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">ADDRESS:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="address" id="add" placeholder="Enter Address" value="<?php echo $ft['Address']; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">EMAIL:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="email" id="mail" placeholder="Enter Email" value="<?php echo $ft['PhoneNO']; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">PHONENUMBER:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter PHONENUMBER" value="<?php echo $ft['Email']; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Password:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="password" id="password" placeholder="Enter password" value="<?php echo $ft['Password']; ?>">
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-sm-2">USERNAME:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" value="<?php echo $ft['Username']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">GENDER:</label>
								<div class="col-sm-6">
									<input type="radio" name="Gender" id="gender">MALE
									<input type="radio" name="Gender" id="gender">FEMALE
								</div>
							</div>
							
							<div class="form-group" style="width: 50%; margin-left: 17%">
								<select class="form-control" name="country" id="country"> 
									<option value=""><?php echo $ft['Country'];?></option>
									<option value="unguja">UNGUJA</option>
									<option value="pemba">PEMBA</option>
									<option value="tanganyika">TANGANYIKA</option>
								</select>
							</div>


							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" onclick= "return validate()" name="submit" style="width: 20%">Register</button>


								</div>
							</div>
						</form>

						<?php 
include("connection.php");

if(isset($_POST['submit'])){

  $product=$_POST['Costomer_id'];
  $name=$_POST['name'];
  $add=$_POST['address'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $username=$_POST['username'];
  $gender=$_POST['Gender'];
  $country=$_POST['country'];
  

  $sql="UPDATE customer SET costomer_name=:name,Address=:add,PhoneNO=:phone,Email=:email,password=:password,Username=:username,Gender=:gender,Country=:country WHERE Costomer_id= :id";
  $pre = $pdo->prepare($sql);
  $pre->execute(array(':name'=>$name,':add'=>$add,':phone'=>$phone,':email'=>$email,':password'=>$password,':username'=>$username,':gender'=>$gender,':country'=>$country,':id'=>$product));
   echo "<script>window.location='viewcustomer.php'</script>";
}

?>
								</div>
							</div>
						</div>



						<div class=" panel-footer text-center">
							<p id="footer">@copyright2020</p>
						</div>

					</body>
					</html>