<!DOCTYPE html>
<body>

teacher Name : <?php echo $name = $_POST["name"]; ?><br>
teacher contact number : <?php echo $number = $_POST["number"]; ?><br>
teacher email address is : <?php echo $email = $_POST["email"]; ?><br>
teacher gender : <?php echo $gender = $_POST["gender"]; ?><br>
teacher qualification : <?php echo $qualification = $_POST["qualification"]; ?><br>
teacher address : <?php echo $address = $_POST["address"];?><br>
teacher image : <?php echo $image = $_POST["image"];?><br>

<br><br>


<?php

include("connect.php");

$sql = "INSERT INTO teacher (name,number,email,gender,qualification,address,image)
VALUES ('$name','$number','$email','$gender','$qualification','$address','$image')";

if ($conn->query($sql) === TRUE) {
  echo "New Teacher record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>