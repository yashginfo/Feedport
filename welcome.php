<!DOCTYPE html>
<body>

User Name : <?php echo $name = $_POST["name"]; ?><br>
Your email address is: <?php echo $email = $_POST["email"]; ?><br>
password is: <?php echo $password = $_POST["password"];?><br>
confirm password is: <?php echo $_POST["password2"];?><br>
<br><br>

<a href="log_in.html">Return to login page </ahref><br>

<?php

include("connect.php");

$sql = "INSERT INTO user (name,email,password)
VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>