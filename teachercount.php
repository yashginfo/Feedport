<?php
include("connect.php");

$sql = "SELECT COUNT(email) AS email_count FROM teacher";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    //echo "Total emails: " . $row['email_count'];
    $tcount = $row['email_count'];
    
} else {
    echo "Error: " . $conn->error;
}
//echo $tcount;
$conn->close();

?>