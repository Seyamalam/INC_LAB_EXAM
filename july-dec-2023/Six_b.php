<?php
$conn = mysqli_connect("localhost", "username", "password", "database_name");

$query = "CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    telephone VARCHAR(20)
)";

if(mysqli_query($conn, $query)) {
    echo "Table created successfully";
}
?>