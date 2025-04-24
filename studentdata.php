<?php

echo $name = $_POST["name"];
echo $number = $_POST["number"]; 
 echo $email = $_POST["email"]; 
 echo $parents = $_POST["parents"]; 
 echo $gender = $_POST["gender"]; 
  echo $class = $_POST["class"]; 
  echo $address = $_POST["address"];
  echo $image = $_POST["image"];
 echo $city = $_POST["city"];
  echo $state = $_POST["state"];


include("connect.php");

$sql = "INSERT INTO students (name,number,email,parents,gender,class,address,image,city,state)
VALUES ('$name','$number','$email','$parents','$gender','$class','$address','$image','$city','$state')";

if ($conn->query($sql) === TRUE) {
  echo "New Student record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>