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
	<title>Shoes ordering</title>
	<link rel="stylesheet" type="text/css" href="Homepage.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style>
		.row.content {height: 1500px}
		.sidenav {
			background-color: #f1f1f1;
			height: 100%;
		}

		/*footer {
			background-color: #555;
			color: white;
			padding: 15px;*/
		}
		@media screen and (max-width: 767px) {
			.sidenav {
				height: auto;
				padding: 15px;
			}
			.row.content {height: auto;} 
		}
	</style>
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
				<h4 id="bm">B&M SHOES</h4>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#s">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Contact us</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul>
			</div>

			<div class="col-sm-9" style="height: 500px">
				<div class="row">
					<div class="col-sm-12" style="margin-top: 40px;">
						<marquee>
							<img src="images/woman/images2.jpg"  style="width: 100px;" >
							<img src="images/woman/img (1).jpg"  style="width: 100px;">
							<img src="images/man/image1 (1).jpg" style="width: 100px;" >
							<img src="images/man/image1 (18).jpg" style="width: 100px;">
						</marquee>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-condensed">

							<thead>
								<tr>
									<th>brand</th>
									<th>Prise</th>
									<th>colour</th>
									<th>sizes</th>
									<th>picture</th>
									<th>Order</th>
								</tr>
							</thead>
							<tbody>

								<?php 
								include("connection.php");
								$query = "SELECT * FROM shoes";
								$stmt=$pdo->query($query);
								while ($row= $stmt->fetch(PDO::FETCH_ASSOC)){
									?>
									<tr>
										<td><?php echo $row['Brands']?></td>
										<td><?php echo $row['Prise']?></td>
										<td><?php echo $row['colour']?></td>
										<td><?php echo $row['sizes']?></td>
										<td><?php echo $row['Brands']?></td>
										<td><a href="order.php">Order</a></td>
									<?php } ?>

									</tr>
								</tbody>
							</table>
								</div>
							</div>
						</div>
					</div>
				</div>
		
					<p id="footer">@copyright2020</p>

			</body>
			</html>
