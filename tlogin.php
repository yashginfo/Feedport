<!DOCTYPE html>
<body>


<?php
 
 $temail = $_POST["temail"];
 $tpassword = $_POST["tpassword"];

//  echo $email; 
//  echo "<br>";
//  echo $password;
//  echo "<br>";
//  $encode = md5($password);
//  echo $encode;

// echo "<br>";

include("connect.php");

$sql = "SELECT * FROM tuser WHERE temail = '$temail';";

//$sql = "SELECT regno, name, mobile, email FROM userdata WHERE regno='102';";

$data = $conn->query($sql);


if ($data->num_rows>0) {
	while ($row = $data->fetch_assoc()) {
		if ($tpassword ==  $row["tpassword"]) {
		 	echo "password matched";
			 header('Location: teacherreview.php');
		 }
		 else echo "Wrong Password ";
         header('Refresh: 2; URL=teacherlog.html');
	}

} else {
	echo " Email does not matched: Error[404]".$conn->error;
	header('Refresh: 2; URL=teacherlog.html');
}

$conn->close();
?>

</body>
</html>