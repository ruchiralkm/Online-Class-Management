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
    <link rel="stylesheet" href="studentmcsk.css" />

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
	    background-color:green;
	    color:#fff;
	    font-size:1em;
	    padding:5px;
	    text-decoration:none;
      border-radius:10px;
  }

  .opt2{
	    background-color:red;
	    color:#fff;
	    font-size:1em;
	    padding:5px;
	    text-decoration:none;
      border-radius:10px;
  }

  .opt3{
	    background-color:#0096FF;
	    color:#fff;
	    font-size:1em;
	    padding:5px;
	    text-decoration:none;
      border-radius:10px;
  }


    </style>



    <!-- dropdown -->

    <script>
    // Function to update the second dropdown based on the selection in the first dropdown
    function updateSecondDropdown() {
        var firstDropdown = document.getElementById("firstDropdown");
        var secondDropdown = document.getElementById("secondDropdown");

        // Clear existing options
        secondDropdown.innerHTML = "";

        // Get the selected option from the first dropdown
        var selectedOption = firstDropdown.options[firstDropdown.selectedIndex].value;

        // Populate the second dropdown based on the selection
        if (selectedOption === "Maths") {
            var option1 = document.createElement("option");
            option1.text = "Combined Maths";
            option1.value = "Combined Maths";
            secondDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.text = "Chemistry";
            option2.value = "Chemistry";
            secondDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.text = "Physics";
            option3.value = "Physics";
            secondDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.text = "ICT";
            option4.value = "ICT";
            secondDropdown.add(option4);

        } else if (selectedOption === "Biology") {
            var option1 = document.createElement("option");
            option1.text = "Biology";
            option1.value = "Biology";
            secondDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.text = "Chemistry";
            option2.value = "Chemistry";
            secondDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.text = "Physics";
            option3.value = "Physics";
            secondDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.text = "Agriculture";
            option4.value = "Agriculture";
            secondDropdown.add(option4);
        }else if (selectedOption === "Technology") {
            var option1 = document.createElement("option");
            option1.text = "ET";
            option1.value = "ER";
            secondDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.text = "SFT";
            option2.value = "SFT";
            secondDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.text = "BST";
            option3.value = "BST";
            secondDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.text = "ICT";
            option4.value = "ICT";
            secondDropdown.add(option4);
        }else if (selectedOption === "Commerce") {
            var option1 = document.createElement("option");
            option1.text = "Accountancy";
            option1.value = "Accountancy";
            secondDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.text = "Business Studies";
            option2.value = "Business Studies";
            secondDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.text = "Economics";
            option3.value = "Economics";
            secondDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.text = "ICT";
            option4.value = "ICT";
            secondDropdown.add(option4);
        }else if (selectedOption === "Arts") {
            var option1 = document.createElement("option");
            option1.text = "Social Sciences";
            option1.value = "Social Sciences";
            secondDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.text = "Religious and Civilization";
            option2.value = "Religious and Civilization";
            secondDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.text = "Aesthetics";
            option3.value = "Aesthetics";
            secondDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.text = "ICT";
            option4.value = "ICT";
            secondDropdown.add(option4);
        }else if (selectedOption === "Language") {
            var option1 = document.createElement("option");
            option1.text = "English";
            option1.value = "English";
            secondDropdown.add(option1);

            var option2 = document.createElement("option");
            option2.text = "German";
            option2.value = "German";
            secondDropdown.add(option2);

            var option3 = document.createElement("option");
            option3.text = "French";
            option3.value = "French";
            secondDropdown.add(option3);

            var option4 = document.createElement("option");
            option4.text = "Tamil";
            option4.value = "Tamil";
            secondDropdown.add(option4);
        }
    }

    // Function to set default selections
    function setDefaultSelections() {
        var firstDropdown = document.getElementById("firstDropdown");
        var secondDropdown = document.getElementById("secondDropdown");

        // Set default selections
        firstDropdown.value = "maths";
        updateSecondDropdown();
        secondDropdown.value = "SS";
    }
</script>
    



  </head>
  <body onload="setDefaultSelections()">

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
              <span class="link-name">Courses</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Courses</a></li>
            <li><a href="#">Block Chain</a></li>
            <li><a href="#">Cryptography</a></li>
            <li><a href="#">Animation</a></li>
          </ul>
        </li>

        <li>
          <div class="icon-link">
            <a href="#">
              <i class="fab fa-blogger"></i>
              <span class="link-name">Blog</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Blog</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Card Design</a></li>
            <li><a href="#">Form Design</a></li>
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
            <i class="fas fa-heart"></i>
            <span class="link-name">Favourite</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Favourite</a></li>
          </ul>
        </li>

        <li>
          <div class="icon-link">
            <a href="#">
              <i class="fas fa-laptop-code"></i>
              <span class="link-name">Compiler</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Compiler</a></li>
            <li><a href="#">Python Compiler</a></li>
            <li><a href="#">Java Compiler</a></li>
            <li><a href="#">C Compiler</a></li>
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
            <i class="fas fa-cart-shopping"></i>
            <span class="link-name">Cart</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Cart</a></li>
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
              <img src="adm.png" alt="" />
            </div>

            <div class="name-job">
              <div class="name">
                
                <?php
                // Retrieve name from URL query string
                $name = $_GET['name'];
                echo "<p style = 'color:white;'> $name</p>";
                ?>
    
              </div>
              <div class="job">Admin</div>
            </div>
            <a href="admin.html"><i class="fas fa-right-to-bracket"></i></a>
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
  <th colspan="3">Oparation</th>
<!-- <th>Delete Records</th> -->
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

<td><a href="#" class="opt">Update</a></td>
<td><a href="#" class="opt2">Delete</a></td>
<td><a href="https://www.youtube.com/" class="opt3">View</a></td>


</tr>

<?php
$i++;
}
?>


</table>

<?php
}

else{
	echo "No Records Found";
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
  <th colspan="2">Oparation</th>
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

<td><a href="#" class="opt">Update</a></td>
<td><a href="#" class="opt2">Delete</a></td>

</tr>

<?php
$i++;
}
?>


</table>

<?php
}

else{
	echo "No Records Found";
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
  <th colspan="2">Oparation</th>
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

<td><a href="#" class="opt">Update</a></td>
<td><a href="#" class="opt2">Delete</a></td>

</tr>

<?php
$i++;
}
?>


</table>

<?php
}

else{
	echo "No Records Found";
}

?>




    <!-- task add form -->
    <br><br> <h1 style = "margin-left:20px;">Add New Classes</h1>
    <h3 style = "margin-left:20px;">Teachers can add new classes and enter the teacher name, stream, subject date and time</h3><br>

<div class="form">
  <p><b>Add New Class</b></p><br>
    <form action="task.php" method="post">
      <input type="text" name="name" id="name" placeholder="Teacher Name" required>
  
      <select id="firstDropdown" name="stream" onchange="updateSecondDropdown()" required>
      <optgroup label="Select Stream">
        <option value="Maths">Maths</option>
        <option value="Biology">Biology</option>
        <option value="Technology">Technology</option>
        <option value="Commerce">Commerce</option>
        <option value="Arts">Arts</option>
        <option value="Language">Language</option>
      </optgroup>
      </select>

      <select id="secondDropdown" name="subject" required>
        
        <!-- Options will be populated dynamically based on the selection in the first dropdown -->
        
      </select>

      <input type="date" name="date" id="date" placeholder="Date" required>
      <input type="time" name="time" id="time" placeholder="Time" required>

      <div class="button">
        <input type="submit" value="Add Class">
      </div>
        <p>ECLASS Management System</p>

    </form>
</div>

ww



    </div>

    <script src="app.js"></script>
  </body>
</html>
