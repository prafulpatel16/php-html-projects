<?php
    $servername='mysql2021.cntikk0jg8xf.ca-central-1.rds.amazonaws.com';
    $username='admin';
    $password='dbuserpass';
    $dbname = "wpdb01";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>

