<?php
  
$email = $_POST['email'];
$name = $_POST['name'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$city = $_POST['city'];
$state = $_POST['state'];
$parents = $_POST['parents'];
$image = $_POST['image'];
$address = $_POST['address'];


include("connect.php"); 

$sql ="UPDATE students SET name='$name',number='$number',gender='$gender',class='$class',city='$city',parents='$parents',state='$state',address ='$address',image='$image' WHERE email='$email'";

if ($conn->query($sql)===TRUE) 
{
  echo "Data is updated";
  header('Refresh:2; URL=studentrow.php');
  
  
}
  ?>