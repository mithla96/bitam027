<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
     $adre=$_POST['address'];
      $phone=$_POST['phone'];
       $email=$_POST['email'];
        $password=$_POST['password'];
        $username=$_POST['username'];
        $gender=$_POST['gender'];
        $country=$_POST['country'];

   $sql = "UPDATE customer SET costomer_name=:name,Address=:adre,PhoneNO=:phone,Email=:email,Password=:password,Username=:username,Gender=:gender,Country=:country  WHERE Costomer_id=:Costomer_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
        ':costomer_name' =>$name,
        ':Address' => $adre,
        ':PhoneNO' => $phone,
        ':Email' => $email,
        ':Password' => $password));
         ':Username' => $username,
          ':Gender' => $gender,
          ':Country' => $country,
    echo $_SESSION['success'] = 'Record updated';
    header( 'Location:manage_school.php' );
}else{
    echo $error;
}
?>