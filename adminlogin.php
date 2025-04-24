<!DOCTYPE html>
<body>


<?php
 
 $aemail = $_POST["aemail"];
 $apassword = $_POST["apassword"];

//  echo $email; 
//  echo "<br>";
//  echo $password;
//  echo "<br>";
//  $encode = md5($password);
//  echo $encode;

// echo "<br>";

include("connect.php");

$sql = "SELECT * FROM auser WHERE aemail = '$aemail';";

//$sql = "SELECT regno, name, mobile, email FROM userdata WHERE regno='102';";

$data = $conn->query($sql);


if ($data->num_rows>0) {
	while ($row = $data->fetch_assoc()) {
		if ($apassword ==  $row["apassword"]) {
		 	echo "password matched";
			 header('Location: admin.php');
		 }
		 else echo "Wrong Password ";
         header('Refresh: 2; URL= adminlogin.html');
	}

} else {
	echo " Email does not matched: Error[404]".$conn->error;
	header('Refresh: 2; URL= adminlogin.html');
}

$conn->close();
?>

</body>
</html>