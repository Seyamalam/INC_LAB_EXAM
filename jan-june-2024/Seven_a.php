<?php
$conn = mysqli_connect("localhost", "username", "password", "database_name");

$query = "INSERT INTO users (id, name, email, telephone) VALUES
    (3, 'Abrar', 'abrar@yahoo.com', '01812424442'),
    (4, 'Jayed', 'jayed@yahoo.com', '01816767676'),
    (5, 'Naima', 'naima@yahoo.com', '01824839483')";

mysqli_query($conn, $query);
?>