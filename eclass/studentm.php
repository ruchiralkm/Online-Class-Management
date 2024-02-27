<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECLASS</title>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--css file-->
    <link rel="stylesheet" href="studentmcskk.css" />

    <link rel="stylesheet" href="addtasks.css" />



    <!-- table -->
    <style>
      table {
        /* position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%); */
        margin-left:30px;
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

    






    <!-- slide bar -->
    <div class="sidebar close">
      <div class="logo">
        <i class="fas fa-book"></i>
        <span class="logo-name">ECLASS</span>
      </div>

      <ul class="nav-list">
        <li>
          <a href="#">
            <i class="fab fa-microsoft"></i>
            <span class="link-name">Dashboard</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Dashboard</a></li>
          </ul>
        </li>

        <li>
          <div class="icon-link">
            <a href="#">
              <i class="fab fa-codepen"></i>
              <span class="link-name">Classes</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Classes</a></li>
            <li><a href="#">New Classes</a></li>
            <li><a href="#">Old Classes</a></li>
          </ul>
        </li>

        <li>
          <div class="icon-link">
            <a href="#">
              <i class="fa fa-user"></i>
              <span class="link-name">Candidates</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Candidates</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Teachers</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fas fa-clock-rotate-left"></i>
            <span class="link-name">Activity</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Activity</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fas fa-bookmark"></i>
            <span class="link-name">Saved</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Saved</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fas fa-gear"></i>
            <span class="link-name">Settings</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Settings</a></li>
          </ul>
        </li>

        <li>
          <div class="profile-details">
            <div class="profile-content">
              <img src="pro.png" alt="" />
            </div>

            <div class="name-job">
              <div class="name">
                
                <?php
                // Retrieve name from URL query string
                $name = $_GET['name'];
                echo "<p style = 'color:white;'> $name</p>";
                ?>
    
              </div>
              <div class="job">Student</div>
            </div>
            <a href="register.html"><i class="fas fa-right-to-bracket"></i></a>
          </div>
        </li>
      </ul>
    </div>

    <div class="home-section">
      <div class="home-content">
        <i class="fas fa-bars"></i>
        <span class="text">
        <?php
                // Retrieve name from URL query string
                $name = $_GET['name'];
                echo "<h3> Hi $name, Welcome to Our LMS</h3>";
                ?>
        </span>
        
      </div>


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

<h1 style = "margin-left:20px;">Classes Time Table</h1>

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
  <h3 style = "margin-left:50px;"><?php echo "No Classes at this movement"; ?></h3>

  <?php
}

?>





<!----------------------------- Student table ------------------------->
<br><br> <h1 style = "margin-left:20px;">Students Table</h1>
<h3 style = "margin-left:20px;">Students who regitered into the LMS</h3><br>

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
  <h3 style = "margin-left:50px;"><?php echo "No Students have registered"; ?></h3>

  <?php
}

?>








<!------------------------------ Teacher table ------------------------>


<br><br> <h1 style = "margin-left:20px;">Teachers Table</h1>
<h3 style = "margin-left:20px;">Teachers who regitered into the LMS</h3><br>

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
  <h3 style = "margin-left:50px;"><?php echo "No Teachers have registered"; ?></h3>

  <?php
}

?>
<br><p class="copyright"><center><br>
         ©2024 Designed by Ruchira Kaluarachchi | All Rights Reserved.</center><br><br><br>
      </p>





    </div>

    <script src="app.js"></script>




    <script>
      document.addEventListener('DOMContentLoaded', () => {
          var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
          if(disclaimer) {
              disclaimer.remove();
          }
      });
  </script>
  </body>
</html>
