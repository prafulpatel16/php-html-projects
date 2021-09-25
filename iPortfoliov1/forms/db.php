<?php
    $servername='database-1.ctyvngdrcnhr.us-east-1.rds.amazonaws.com';
    $username='admin';
    $password='mypassword';
    $dbname = "test";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>

<?php
include_once 'db.php';
 if(isset($_POST['submit']))
 {    
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
            $sql = "INSERT INTO test1(name,email,subject)
      VALUES ('$name','$email','$subject')";
      if (mysqli_query($conn, $sql)) {
         echo "New record has been added successfully !";
      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      mysqli_close($conn);
 }
 
?>
