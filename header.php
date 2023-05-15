<!DOCTYPE html>
<!--Script explanation: the hamburger menu links have a default setting of display none in CSS. This function toggles between block and display none.
This function is later added to the hamburger button on click.-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<link href="maincss.css" rel="stylesheet" type="text/css"/>

<?php
// DB login credentials
$servername = "localhost";
$username = "id20751575_kayakadmin";
$password = "hn+U:J7N*:*qYn)E";
$dbname = "id20751575_adventures";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($conn === false){
  die("ERROR: Could not connect. "
      . mysqli_connect_error());
}
?>

<script>

    function myFunction() {
      var x = document.getElementById("BurgerLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
    
    </script>

<header>



  <!-- Nav bar code -->
    <nav>
        <div class="topnav">

  <!-- Button displays hamburger image, runs above function on click to reveal hidden menu. -->

          <button onclick="myFunction()"><img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt = "click here for menu" width = "50" height = "50"></button>
          <h1>Halifax Canoe and Kayak</h1>
            <div class ="topnav-right">
            <img class = "logo" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" alt = logo width = 70 height = 50>
            </div>
        </div>
  
   <!-- Hamburger menu items (top three will not display at the moment... When set to display: relative in CSS, they all display but displace other relative content...
    Comments are continued about this in CSS)-->
          
          <div id="BurgerLinks">
            <a href="#news">Home</a>
            <a href="#contact">Book Trip</a>
            <a href="#about">Admin Login</a>
            <a href="admin-add.php">(Made by Jacob Facini)</a>

          </div>
          
   
      </nav>
      
<head>      
    <html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
      
    </header>
    </html>