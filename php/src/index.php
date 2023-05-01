<?php

$host = 'database';
$user = 'elmeow';
$pass = 'inipasswordmeow';
$mydatabase = 'MYSQL_DATABASE';

$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->ID . " " . $user->Names . " " . $user->Addresses . " " . $user->Titles;
    echo "<br>";
}
?>