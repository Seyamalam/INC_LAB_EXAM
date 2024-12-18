<?php
$conn = mysqli_connect("localhost", "username", "password", "database_name");

$query = "DELETE FROM bank_accounts WHERE account_no = '0199001'";

if(mysqli_query($conn, $query)) {
    echo "Account deleted successfully";
}
?>