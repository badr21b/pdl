<?php
$servername = "db4free.net";
$db_name = "pdlife_db_test";
$username = "dev_pdlife";
$password = "krobata1989";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

return $conn;