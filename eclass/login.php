<?php
//-----------Designed by RuchiraLK--------//

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eclass"; // Enter your Database name in the MySQL

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

//users = enter your table name of the database
$sql = "SELECT * FROM student WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch user data
    $row = $result->fetch_assoc();
    $name = $row['name'];

    echo "Login successful, welcome $name!";
} else {
    echo "Invalid email or password";
}

$conn->close();
?>
