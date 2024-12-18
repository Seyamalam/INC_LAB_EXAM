<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
</head>
<body>
    <h2>ADD EMPLOYEE</h2>
    <form method="POST" action="">
        First Name: <input type="text" name="first_name"><br><br>
        Last Name: <input type="text" name="last_name"><br><br>
        Contact Number: <input type="text" name="contact"><br><br>
        Email: <input type="email" name="email"><br><br>
        <input type="submit" name="submit" value="Enter Employee">
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve values using POST method
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        // Print values
        echo "<h3>Employee Details:</h3>";
        echo "First Name: " . htmlspecialchars($first_name) . "<br>";
        echo "Last Name: " . htmlspecialchars($last_name) . "<br>";
        echo "Contact Number: " . htmlspecialchars($contact) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
    }
    ?>
</body>
</html>
