<?php
$inputname = $_POST['inputname'];
$inputEmail = $_POST['inputEmail'];
$inputPassword = $_POST['inputPassword'];
$inputconfirmPassword = $POST['inputconfirmPassword'];
$con = new mysqli('localhost','root','','signup');
if($con->connect_error){
  die('Connection failed :'.$con->connect_error);
}
else{
  $stmt = $conn->prepare("insert into registration("inputname,inputEmail,inputPassword,inputconfirmpassword) values(?,?,?,?)");
  $stmt->bind_param("ssss",$inputname,$inputEmail,$inputPassword,$inputconfirmPassword);
  $stmt->execute();
  echo "Registration sucessfull...";
  $stmt->close();
  $conn->close();
?>
