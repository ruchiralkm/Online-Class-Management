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

    <link rel="stylesheet" href="addtask.css" />




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
        if (selectedOption === "maths") {
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

        } else if (selectedOption === "biology") {
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
        }else if (selectedOption === "technology") {
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
        }else if (selectedOption === "commerce") {
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
        }else if (selectedOption === "arts") {
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
        }else if (selectedOption === "language") {
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
        <span class="logo-name">ELASS</span>
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
              <img src="tea.png" alt="" />
            </div>

            <div class="name-job">
              <div class="name">
                
                <?php
                // Retrieve name from URL query string
                $name = $_GET['name'];
                echo "<p style = 'color:white;'> $name</p>";
                ?>
    
              </div>
              <div class="job">Teacher</div>
            </div>
            <a href="teacherreg.html"><i class="fas fa-right-to-bracket"></i></a>
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
                echo "<p style = 'color:black;'> <b>Hi $name, Welcome to Our LMS </b></p>";
                ?>
        </span>
        
      </div>



      <!-- table -->
      <br> <h3 style = "margin-left:20px;">Classes Time Table</h3>

      <table style = "margin-left:20px;">
        <tr id="header">
            <th>First name</th>
            <th>Last name</th>
            <th>Age</th>
            <th>Country</th>
            <th>Gender</th>
        </tr>
        <tr>
            <td>John </td>
            <td>Doe </td>
            <td>25 </td>
            <td>USA </td>
            <td>Male </td>

        </tr>
        <tr>
            <td>steve </td>
            <td>Doe </td>
            <td>28 </td>
            <td>USA </td>
            <td>Male </td>

        </tr>
        <tr>
            <td>simo </td>
            <td>Doe </td>
            <td>26 </td>
            <td>USA </td>
            <td>Male </td>

        </tr>
        <tr>
            <td>karim </td>
            <td>Doe </td>
            <td>21 </td>
            <td>USA </td>
            <td>Male </td>

        </tr>
        <tr>
            <td>adam </td>
            <td>Doe </td>
            <td>20 </td>
            <td>USA </td>
            <td>Male </td>

        </tr>
        <tr>
            <td>keven </td>
            <td>Doe </td>
            <td>20 </td>
            <td>USA </td>
            <td>Male </td>

        </tr>

        

        
    </table>



    <!-- task add form -->
    <br><br> <h3 style = "margin-left:20px;">Add New Classes</h3><br>

<div class="form">
  <p><b>Add New Class</b></p>
    <form action="waitbe.php" method="post">
      <input type="text" name="name" id="name" placeholder="Teacher Name" required>
  
      <select id="firstDropdown" name="firstDropdown" onchange="updateSecondDropdown()" required>
      <optgroup label="Select Stream">
        <option value="maths">Maths</option>
        <option value="biology">Biology</option>
        <option value="technology">Technology</option>
        <option value="commerce">Commerce</option>
        <option value="arts">Arts</option>
        <option value="language">Language</option>
      </optgroup>
      </select>

      <select id="secondDropdown" name="secondDropdown" required>
      
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
