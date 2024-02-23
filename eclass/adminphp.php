<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECLASS</title>

    <link rel="stylesheet" type="text/css" href="registerphp.css">

</head>
<body>


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
?>

<br><br><br>
<div class="container">

<div class="box-container">

    <div class="box">
        <img src="tick.png">
        <h2>Welcome<?php echo " $name!";?></h2>
        <p>You are successfully Login</p><br>
        <a href="#" class="btn">Home</a>
    </div>
</div>
</div>



<?php
    // echo "Login successful, welcome $name!";
} else {
?>
<br><br><br>
<div class="container">

<div class="box-container">

    <div class="box">
        <img src="close.png">
        <h2><?php echo "Invalid Email or Password";?></h2>
        <p>Login Failed, Try Again!</p><br>
        <a href="register.html" class="btn">Login</a>
    </div>
</div>
</div>


<?php
    // echo "Invalid email or password";
}

$conn->close();
?>


</body>
</html>
