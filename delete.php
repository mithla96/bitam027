<?php
include("connection.php");
session_start();

if (isset($_GET['Costomer_id'])){
    $sql = "DELETE FROM customer WHERE Costomer_id = :Costomer_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':Costomer_id'=> $_GET['Costomer_id']));
    echo $_SESSION['success'] = 'Successful delete';
    header("location:viewcustomer.php" ) ;
    
}
?>