<?php
$conn = mysqli_connect("localhost", "username", "password", "database_name");

$query = "UPDATE users 
          SET name = 'Abir', email = 'abir@yahoo.com' 
          WHERE id = 3";

if(mysqli_query($conn, $query)) {
    echo "Record updated successfully";
}
?>