<?php
// Database connection (assuming you have these values set)
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Create table query
$create_table = "CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    telephone VARCHAR(20)
)";

// Execute create table query
mysqli_query($conn, $create_table);

// Insert data
$insert_data = "INSERT INTO users (id, name, email, telephone) VALUES
    (3, 'Abrar', 'abrar@yahoo.com', '01812424442'),
    (4, 'Jayed', 'jayed@yahoo.com', '01816767676'),
    (5, 'Naima', 'naima@yahoo.com', '01824839483')";

mysqli_query($conn, $insert_data);
?>