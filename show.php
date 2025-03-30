<?php
include("connect.php");

$sql = "SELECT name, email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["name"]. " Email " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>