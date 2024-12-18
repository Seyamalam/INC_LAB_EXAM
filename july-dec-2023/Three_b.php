<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rollno = $_POST['rollno'];
    
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Roll No: " . $rollno;
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Roll no: <input type="text" name="rollno"><br>
    <input type="submit" value="Submit">
</form>