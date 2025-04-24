<?php    

$email = $_GET['email'];
echo $email;

include('connect.php');


$sql="DELETE FROM students WHERE email='$email'";
if($conn->query($sql)===true)
{

    echo"student record deleted successfully";
    header('refresh : 1 ; URL=studentrow.php');
}

else{

echo"error deleting record:".$conn->error;

}

$conn->close();

?>