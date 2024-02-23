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
    <link rel="stylesheet" href="studentmcss.css" />
  </head>
  <body>

    <!-- php code  -->






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
              <img src="pro.png" alt="" />
            </div>

            <div class="name-job">
              <div class="name">
                
                <?php
                // Retrieve name from URL query string
                $name = $_GET['name'];
                echo "<p> $name</p>";
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
                echo "<p> Hi $name, Welcome to Our LMS</p>";
                ?>
        </span>
        
      </div>
      <br> <h3 style = "margin-left:20px;">Classes Time Table</h3>
    </div>

    <script src="app.js"></script>
  </body>
</html>
