<?php

echo $name = $_POST["name"]; 
 echo $email = $_POST["email"]; 
 echo $feedback = $_POST["feedback"]; 
  echo $givenby = $_POST["givenby"];


include("connect.php");

$sql = "INSERT INTO stufeedback (name,email,feedback,givenby)
VALUES ('$name','$email','$feedback','$givenby')";

if ($conn->query($sql) === TRUE) {
  echo "messege send successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>