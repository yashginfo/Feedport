<?php    

$email = $_GET['email'];
echo $email;

include('connect.php');


$sql="DELETE FROM teacher WHERE email='$email'";
if($conn->query($sql)===true)
{

    echo"Teacher record deleted successfully";
    header('refresh : 1 ; URL= teachercart.php');
}

else{

echo"error deleting record:".$conn->error;

}

$conn->close();

?>