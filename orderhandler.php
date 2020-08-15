<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
	$qua = $_POST['quantinty'];
	$pri = $_POST['price'];
	$colo = $_POST['colour'];
	$siz = $_POST['sizes'];
	$br = $_POST['brand'];
	$pic = $_POST['picture'];


	$sql="INSERT INTO CustomerOrder(Quantity,Prise,colour,sizes,Brands,picture,) VALUES (:Quantity,:Prise,:colour,:sizes,:Brands,:picture,)";
	$stmt=$pdo->prepare($sql);
	$stmt->execute(array(':Quantity'=>$qua,':Prise'=>$pri,':colour'=>$colo,':sizes'=>$siz,':Brands'=>$br,':picture'=>$pic,));
	
		header("location:login.php");
}

?>
