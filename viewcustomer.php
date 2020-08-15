<?php
$_SESSION stat();
if (!) {
	# code...
}
}
?>
<!DOCTYPE html>
<html>
<?php
include("connection.php");
?>
<head>
	<title>view_customer</title>
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
		
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-condensed">

							<thead>
								<tr>
									<th>costomername</th>
									<th>Adress</th>
									<th>PhoneN</th>
									<th>email</th>
									<th>password</th>
									<th>username</th>
									<th>gender</th>
									<th>country</th>
									
								</tr>
							</thead>
							<tbody>

								  <?php 
    $sql="SELECT Costomer_id,costomer_name,Address,PhoneNO,Email,Password,Username,Gender,Country FROM customer ";
    $stmt=$pdo->query($sql);

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo (htmlentities($row['costomer_name']));
    echo("</td><td>");
    echo (htmlentities($row['Address']));
    echo("</td><td>");
    echo (htmlentities($row['PhoneNO']));
    echo("</td><td>");
    echo (htmlentities($row['Email']));
    echo("</td><td>");
    echo (htmlentities($row['Password']));
    echo("</td><td>");
    echo (htmlentities($row['Username']));
    echo("</td><td>");
    echo (htmlentities($row['Gender']));
    echo("</td><td>");
     echo (htmlentities($row['Country']));
    echo("</td><td>");

    echo('<a href="editcustomer.php?Costomer_id='.$row['Costomer_id'].'"> <b> Edit </b> </a>');
    echo("</td><td>");

   echo('<a href="delete.php?Costomer_id='.$row['Costomer_id'].'"> <b> delete </b> </a>');
    echo("</td><td>");
  
    }
 ?>  
      
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
