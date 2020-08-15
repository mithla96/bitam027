<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </head>
     <body>
        <form action="edithandler.php" method="POST" class="form-horizontal" role="form">
                <?php
            include("connection.php");
            if (isset($_GET['ID'])) {
              $id = $_GET['ID'];
            $sql ="Select * from customer where Costomer_id='$id'"; 
            $stmt=$pdo->query($sql);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
              ?>
                <div class="form-group">
                  <label class="control-label col-sm-2">FULL NAME:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $row['costomer_name'] ?>" id="name" placeholder="Enter FullName">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">ADDRESS:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $row['Address'] ?>" id="add" placeholder="Enter Address">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">phone:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $row['PhoneNO'] ?>" id="mail" placeholder="Enter Email">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">email:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['Email'] ?>" id="phone" placeholder="Enter PHONENUMBER">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">Password:</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" value="<?php echo $row['Password'] ?>" id="password" placeholder="Enter password">
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-sm-2">USERNAME:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" value="<?php echo $row['Username'] ?>" id="username" placeholder="Enter your username">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">GENDER:</label>
                  <div class="col-sm-6">
                    <input type="radio" name="Gender" id="gender" value="<?php echo $row['Gender'] ?>">MALE
                    <input type="radio" name="Gender" id="gender" value="<?php echo $row['SCHOOL_NAME'] ?>">FEMALE
                  </div>
                </div>
                
                <div class="form-group" style="width: 50%; margin-left: 17%">
                  <select class="form-control" name="country" id="country" value="<?php echo $row['Country'] ?>">
                    <option value="">--COUNTRY--</option>
                    <option value="unguja">UNGUJA</option>
                    <option value="pemba">PEMBA</option>
                    <option value="tanganyika">TANGANYIKA</option>
                  </select>
                </div>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" onclick= "return validate()" name="submit" style="width: 20%">Register</button>
                  </div>
                </div></form>
              
              

                  </div>
                </div>
              </div>

              <div class=" panel-footer text-center">
                <p id="footer">@copyright2020</p>
              </div>
	
	</body>
	</html>>