<?php

 $name = $_POST["name"]; 
  $email = $_POST["email"]; 
  $feedback = $_POST["feedback"]; 
   $givenby = $_POST["givenby"];


include("connect.php");

$sql = "INSERT INTO stufeedback (name,email,feedback,givenby)
VALUES ('$name','$email','$feedback','$givenby')";

if ($conn->query($sql) === TRUE) {
   "messege send successfully";
   header("Location: sfeedback.php");
} else {
   "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
?>