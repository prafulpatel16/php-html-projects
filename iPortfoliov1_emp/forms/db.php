<?php
    $servername='mysql2.cagenoemjwd5.us-east-2.rds.amazonaws.com';
    $username='admin';
    $password='Passw0rd!';
    $dbname = "contacts";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_error());
        }
?>

