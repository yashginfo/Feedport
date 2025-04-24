<?php
include("connect.php");

$sql = "SELECT COUNT(email) AS email_count FROM students";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    //echo "Total emails: " . $row['email_count'];
    $rcount = $row['email_count'];
    
} else {
    echo "Error: " . $conn->error;
}
//echo $tcount;
$conn->close();

?>