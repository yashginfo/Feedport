<!DOCTYPE html>
<body>


<?php
 
session_start();

 $email = $_POST["email"];
 $password = $_POST["password"];


$_SESSION["email"] = $email;
$semail = $_SESSION["email"];
//  echo $email; 
//  echo "<br>";
//  echo $password;
//  echo "<br>";
//  $encode = md5($password);
//  echo $encode;

// echo "<br>";

include("connect.php");

$sql = "SELECT * FROM user WHERE email = '$email';";

//$sql = "SELECT regno, name, mobile, email FROM userdata WHERE regno='102';";

$data = $conn->query($sql);


if ($data->num_rows>0) {
	while ($row = $data->fetch_assoc()) {
		if ($password ==  $row["password"]) {
		 	echo "password matched";
			 header('Location: studentreview.php');
		 }
		 else echo "wrong password";
         header('Refresh: 2; URL=login.html');
	}

} else {
	echo " Email or Password does not matched: Error[404]".$conn->error;
	header('Refresh: 1; URL=login.html');
}

$conn->close();
?>

</body>
</html>