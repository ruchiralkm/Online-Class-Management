<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECLASS</title>

    <link rel="stylesheet" type="text/css" href="registerphp.css">

</head>
<body>


<!--------------------- delete records -------------------->
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="eclass";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("d".mysqli_connect_erro());
}
else{
	
}
$sql = "DELETE FROM task WHERE name='".$_REQUEST['name']."'";

if(mysqli_query($conn,$sql)){
	

    ?>

<br><br><br>
<div class="container">

<div class="box-container">

    <div class="box">
        <img src="tick.png">
        <h2>You are successfully deleted record</h2>
        <!-- <p>You are successfully deleted record</p> -->
        <br>
        <!-- <a href="studentm.php" class="btn">Home</a> -->
    </div>
</div>
</div>



<?php


}
else{
	echo "<br> Error Deleting recode:".mysqli_errno($conn);
}
mysqli_close($conn);

?>



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
