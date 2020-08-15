<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
	$na = $_POST['name'];
	$adr = $_POST['address'];
	$pho = $_POST['phone'];
	$mail = $_POST['email'];
	$pa = $_POST['password'];
	$user = $_POST['username'];
	$ge = $_POST['Gender'];
	$co = $_POST['country'];

	$sql="INSERT INTO CUSTOMER(costomer_name,Address,PhoneNO,Email,Password,Username,Gender,Country) VALUES (:costomer_name,:Address,:PhoneNO,:Email,:Password,:Username,:Gender,:Country)";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(':costomer_name'=>$na,':Address'=>$adr,':PhoneNO'=>$pho,':Email'=>$mail,':Password'=>$pa,':Username'=>$user,':Gender'=>$ge,':Country'=>$co));
	
		header("location:login.php");
}

?>
