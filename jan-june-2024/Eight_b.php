<?php
$conn = mysqli_connect("localhost", "username", "password", "database_name");

$query = "DELETE FROM users WHERE id = 4";

mysqli_query($conn, $query);
?>