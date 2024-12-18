<?php
$conn = mysqli_connect("localhost", "username", "password", "database_name");

$query = "UPDATE users 
          SET name = 'Abir', email = 'abir@yahoo.com' 
          WHERE id = 3";

mysqli_query($conn, $query);
?>