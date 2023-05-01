<?php

$host = "database";
$user = "elmeow";
$pass = "inipasswordmeow";
$mydatabase = "MYSQL_DATABASE";

$conn = new mysqli($host, $user, $pass, $mydatabase);

if ($conn->error_result) {
  die("Connection failed: " . $conn->error_result);
}

$sql = "SELECT COUNT(*) AS countuser FROM users";
$result = $conn->query($sql);

if ($result->totalrows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Total users: " . $row["countuser"];
  }
} else {
  echo "No users found";
}
$conn->close();
?>