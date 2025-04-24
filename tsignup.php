<!DOCTYPE html>
<body>

<!-- User Name : <?php echo $tname = $_POST["tname"]; ?><br>
Your email address is: <?php echo $temail = $_POST["temail"]; ?><br>
password is: <?php echo $tpassword = $_POST["tpassword"];?><br> -->
<br><br>

<!-- <a href="login.html">Return to login page </ahref><br> -->

<?php

include("connect.php");

$sql = "INSERT INTO tuser (tname,temail,Private,tpassword)
VALUES ('$tname', '$temail','tprivate' ,'$tpassword')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header('Refresh: 1; URL=login.html');
}
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>