<?php
require_once 'login.php';

// Create connection
$conn =mysql_connect($hostname, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
//echo "Connected successfully";
}
mysql_select_db('$dbname');

?>
