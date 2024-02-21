<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//-----------Designed by RuchiraLK--------//

$servername = "localhost";
$username = "id21907263_root";
$password = "Ruchira@123";
$dbname = "id21907263_eclass"; // Enter your Database name in the MySQL

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

//users = enter your table name of the database
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch user data
    $row = $result->fetch_assoc();
    $name = $row['name'];

    echo "Login successful, welcome $name!";
    ?>
    <h1>Passed</h1>
    <?php
} else {
    echo "Invalid email or password";

    ?>
    <h1>Failed</h1>
    <?php
}

$conn->close();
?>



</body>
</html>

