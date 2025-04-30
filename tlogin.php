<!DOCTYPE html>
<body>


<?php
 
session_start();

 $temail = $_POST["temail"];
 $tpassword = $_POST["tpassword"];

$_SESSION["email"] = $temail;
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
		 	"password matched";
			 header('Location: teacherreview.php');
		 }
		 else "Wrong Password ";
         header('Refresh: 1; URL=teacherlog.html');
	}

} else {
	" Email does not matched: Error[404]".$conn->error;
	header('Refresh: 1; URL=teacherlog.html');
}

$conn->close();
?>

</body>
</html>