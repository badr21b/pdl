<?php
$conn = include '../db_config/db_connect.php';

$sql = "SELECT * FROM pdlife_db_test.user_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        var_dump($row);
//        echo $row["test_name"];
    }
} else {
    echo "0 results";
}
$conn->close();

