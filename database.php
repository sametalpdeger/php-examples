<?php

$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "php";
try {    
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    echo "Connected successfully";
} catch (\Throwable $th) {
    echo "Connection failed";
}
?>  