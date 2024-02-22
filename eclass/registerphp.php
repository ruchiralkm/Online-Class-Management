<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

$name = $_POST['name'];
$stream = $_POST['stream'];
$email = $_POST['email'];
$password = $_POST['password'];

//users = enter your table name of the database
$sql = "INSERT INTO student (name,stream,email,password) VALUES ('$name','$stream', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    // echo "Registration successful!";
    ?>
<br><br><br>
<div class="container">

    <div class="box-container">

        <div class="box">
            <img src="tick.png">
            <h2>Hii<?php echo " $name!";?></h2>
            <p>You are successfully registered</p>
            <a href="register.html" class="btn">Login</a>
        </div>
    </div>
</div>
  
    <?php
    // You can redirect to another page or perform additional actions here
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


  
</body>
</html>