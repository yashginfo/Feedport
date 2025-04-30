<?php

$name = $_POST["name"]; 
$email = $_POST["email"]; 
$feedback = $_POST["feedback"]; 
$givenby = $_POST["givenby"];


include("connect.php");

$sql = "INSERT INTO teafeedback (name,email,feedback,givenby)
VALUES ('$name','$email','$feedback','$givenby')";

if ($conn->query($sql) === TRUE) {
  echo "Messege send successfully";
  header("Location: tfeedback.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>