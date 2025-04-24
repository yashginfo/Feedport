<?php
include("connect.php");

$sql = "SELECT COUNT(email) AS email_count FROM user";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    //echo "Total emails: " . $row['email_count'];
    $lcount = $row['email_count'];
    
} else {
    echo "Error: " . $conn->error;
}
//echo $tcount;
$conn->close(); 

?>