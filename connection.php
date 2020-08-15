<?php
try{
	$pdo=new PDO('mysql:host=localhost;dbname=mb_shoes','root','');
}catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}
?>
