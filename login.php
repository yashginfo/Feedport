<!DOCTYPE html>
<body>


<?php
 
 $email = $_POST["email"];
 $password = $_POST["password"];
//  echo $email; 
//  echo "<br>";
//  echo $password;
//  echo "<br>";
//  $encode = md5($password);
//  echo $encode;

 echo "<br>";

include("connect.php");

$sql = "SELECT * FROM user WHERE email = '$email';";

//$sql = "SELECT regno, name, mobile, email FROM userdata WHERE regno='102';";

$data = $conn->query($sql);


if ($data->num_rows>0) {
	while ($row = $data->fetch_assoc()) {
		if ($password ==  $row["password"]) {
		 	echo "password matched";
            header('Refresh: 2; URL=main.html');
		 }
		 else echo "wrong password";
         header('Refresh: 2; URL=log_in.html');
	}

} else {
	echo "error: ".$sqlconn->error;
}

$conn->close();
?>

</body>
</html>