<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECLASS</title>


        <!--font awesome(for icons)-->
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!--BootStrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />


    <link rel="stylesheet" type="text/css" href="registerphp.css">
    <link rel="stylesheet" type="text/css" href="tk.css">



    
    <!-- table -->
    <style>
      table {
        /* position: absolute; */
        /* left: 50%;
        top: 50%; */
        /* transform: translate(-50%, -50%); */
        margin-left:5%;
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        border-radius:20px;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    tr {
        transition: all .2s ease-in;
        
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-weight:bold;
    }

    #header {
        background-color: #16a085;
        color: #fff;
    }

    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    .opt{
	    background-color:#0096FF;
	    color:#fff;
	    font-size:1em;
	    padding:5px;
	    text-decoration:none;
      border-radius:10px;
  }


    </style>




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







<!-- slide bar -->

<div class="wrapper">
      <aside class="sidebar">
        <div class="d-flex">
          <button class="toggle-btn" type="button">
            <i class="fas fa-bars"></i>
          </button>

          <div class="sidebar-logo">
            <a href="#">ECLASS</a>
          </div>
        </div>

        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="fas fa-home"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="fas fa-wallet"></i>
              <span>Wallet</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target=".tools"
              aria-expanded="false"
              aria-controls="tools"
            >
              <i class="fas fa-wrench"></i>
              <span>Tools</span>
            </a>
            <ul
              class="tools sidebar-dropdown list-unstyled collapse"
              data-bs-parent=".sidebar"
            >
              <!-- <li class="sidebar-item">
                <a
                  href="#"
                  class="sidebar-link collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target=".drop-two"
                  aria-expanded="false"
                  aria-controls="drop-two"
                >
                  Guides -->
                </a>
                <!-- <ul class="drop-two sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Start a Blog</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Start a Website</a>
                  </li>
                </ul> -->
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="fas fa-bell"></i>
              <span>Notifications</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="fas fa-cog"></i>
              <span>Settings</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target=".company"
              aria-expanded="false"
              aria-controls="company"
            >
              <i class="fas fa-building"></i>
              <span>Company</span>
            </a>
            <ul
              class="company sidebar-dropdown list-unstyled collapse"
              data-bs-parent=".sidebar"
            >
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">About</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Contact</a>
              </li>
            </ul>
          </li>
        </ul>

        <div class="sidebar-footer">
          <a href="register.html" class="sidebar-link">
            <i class="fas fa-right-from-bracket"></i>
            <span>Logout</span>
          </a>
        </div>
      </aside>

      <div class="main p-4">
      <h1>Hi <?php echo " $name!";?>, Welcome to our LMS</h1><br><br>


      <h4>You are Student,</h4>

      
            <!-------------- classes table --------------->
            <br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="eclass";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
die("Connection Erro".mysqli_connect_error());
}else{

}
?>

<h1 style = "margin-left:-600px;">Classes Time Table</h1>

<?php

$sql="SELECT * FROM task";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

?>

<!-------------------------------------------------------Create Table------------------------------>
<table border=2>
<tr id="header">
<th>Teacher</th>
<th>Stream</th>
<th>Subject</th>
<th>Date</th>
<th>Time</th>
<th colspan="1">Operate</th>
</tr>
<!------------------------------------------------------Assign------------------------------------>
<?php

$i=0;
while($row=mysqli_fetch_array($result)){

?>

<tr>
<td> <?php echo $row["name"];  ?> </td>
<td> <?php echo $row["stream"];  ?> </td>
<td> <?php echo $row["subject"];  ?> </td>
<td> <?php echo $row["date"];  ?> </td>
<td> <?php echo $row["time"];  ?> </td>

<td><a href="https://www.youtube.com/" class="opt">View</a></td>


</tr>

<?php
$i++;
}
?>


</table>

<?php
}

else{
  ?>
  <h5 style = "margin-left:-600px;"><?php echo "No Classes at this movement"; ?></h5>

  <?php
}

?>





<!----------------------------- Student table ------------------------->
<br><br> <h1 style = "margin-left:-600px;">Students Table</h1>
<h5 style = "margin-left:-600px;">Students who regitered into the LMS</h5><br>

<?php

$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

?>

<!-------------------------------------------------------Create Table------------------------------>
<table border=2>
<tr id="header">
  <th>Student</th>
  <th>Stream</th>
  <th>Email</th>
</tr>
<!------------------------------------------------------Assign------------------------------------>
<?php

$i=0;
while($row=mysqli_fetch_array($result)){

?>

<tr>
<td> <?php echo $row["name"];  ?> </td>
<td> <?php echo $row["stream"];  ?> </td>
<td> <?php echo $row["email"];  ?> </td>

</tr>

<?php
$i++;
}
?>


</table>

<?php
}

else{
  ?>
  <h5 style = "margin-left:-600px;"><?php echo "No Students have registered"; ?></h5>

  <?php
}

?>








<!------------------------------ Teacher table ------------------------>


<br><br> <h1 style = "margin-left:-600px;">Teachers Table</h1>
<h5 style = "margin-left:-600px;">Teachers who regitered into the LMS</h5><br>

<?php

$sql="SELECT * FROM teacher";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

?>

<!-------------------------------------------------------Create Table------------------------------>
<table border=2>
<tr id="header">
  <th>Teacher</th>
  <th>Stream</th>
  <th>Email</th>
</tr>
<!------------------------------------------------------Assign------------------------------------>
<?php

$i=0;
while($row=mysqli_fetch_array($result)){

?>

<tr>
<td> <?php echo $row["name"];  ?> </td>
<td> <?php echo $row["stream"];  ?> </td>
<td> <?php echo $row["email"];  ?> </td>

</tr>

<?php
$i++;
}
?>


</table>

<?php
}

else{
  ?>
  <h5 style = "margin-left:-600px;"><?php echo "No Teachers have registered"; ?></h5>

  <?php
}

?>

<p class="copyright"><center><br>
         ©2024 Designed by Ruchira Kaluarachchi | All Rights Reserved.</center><br><br><br>
      </p>








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





<script>
      document.addEventListener('DOMContentLoaded', () => {
          var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
          if(disclaimer) {
              disclaimer.remove();
          }
      });
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script src="app.js"></script>



</body>
</html>
