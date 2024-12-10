<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $bio = $_POST['bio'];
    $password = $_POST['password'];

    echo "Name: $name<br>";
    echo "Date of Birth: $dob<br>";
    echo "Email: $email<br>";
    echo "Telephone: $telephone<br>";
    echo "Bio: $bio<br>";
    echo "Password: $password<br>";
} else { 
?>
<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="telephone">Telephone:</label><br>
    <input type="tel" id="telephone" name="telephone" required><br><br>

    <label for="bio">Bio:</label><br>
    <textarea id="bio" name="bio" required></textarea><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Submit">
</form>
<?php } ?>
