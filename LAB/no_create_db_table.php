<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "INC"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) { 
    echo "Connection failed"; 
}

$sql = "INSERT INTO myTable (ID, Name, Email, Telephone) VALUES 
    ('01999001', 'Naima Sultana', 'naima@example.com', '123-456-7890'),
    ('01999002', 'John Doe', 'john@example.com', '234-567-8901'),
    ('01999003', 'Jane Smith', 'jane@example.com', '345-678-9012'),
    ('01999004', 'Robert Brown', 'robert@example.com', '456-789-0123')";

if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
} else {
    echo "Error inserting records: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
