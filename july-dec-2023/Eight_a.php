<?php
$conn = mysqli_connect("localhost", "username", "password", "database_name");

$query = "CREATE TABLE bank_accounts (
    account_no VARCHAR(20) PRIMARY KEY,
    account_name VARCHAR(100),
    bank_name VARCHAR(100)
)";

mysqli_query($conn, $query);

$insert = "INSERT INTO bank_accounts VALUES 
    ('0199000', 'Naima Sultana', 'Eastern Bank Limited')";

if(mysqli_query($conn, $insert)) {
    echo "Account data inserted successfully";
}
?>