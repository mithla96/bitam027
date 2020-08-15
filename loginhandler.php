<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
	$userN = $_POST['username'];
	$password = $_POST['password'];

	$query="SELECT * FROM customer where Username=:userN AND Password=:password";
	$stmt=$pdo->prepare($query);
	$stmt->execute(array("userN"=>$userN,"password"=>$password));
	if($stmt->rowCount()>0){ 
		$_SESSION['user']=$userN;
		$_SESSION['pass']=$password;
		header("location:CustomerOrder.php");
	}else{
		$query="SELECT * FROM admin where Username=:userN AND Password=:password";
	$stm=$pdo->prepare($query);
	$stm->execute(array(":userN"=>$userN,"password"=>$password));
	if($stm->rowCount()>0){ 
		$_SESSION['user']=$userN;
		$_SESSION['pass']=$password;
		header("location:admin.php");
	}else{
		header("location:Login.php");
	}

}
}
else{
	header("location:Login.php");
}
?>
