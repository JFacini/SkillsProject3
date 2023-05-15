<!DOCTYPE html>

<header>
<?php include "header.php";?>
<title>Halifax Canoe and Kayak | Admin - Add Adventure</title>
<link href="maincss.css" rel="stylesheet" type="text/css"/>
</header>
    
<main>
<br>
<br>

<h2>Admin - Add Adventure</h2>

<br>
<br>
<hr>
<br>
<br>

<div class = "inputforms">
 
<form action="admin-confirm.php" method = "post">
  
  <label for="heading">Heading:
    <input type="text" id="heading" name="heading" minlength = 2 maxlength = 20 placeholder="Sydney" required>
    </label>


  
  <label for="tripDate">Trip Date:
    <input type="date" id="tripDate" name="tripDate" required>
    </label>
 

 
  <label for="duration">Duration (days):
    <input type="text" id="duration" name="duration" minlength = 1 maxlength = 3 placeholder="1" required>
    </label>

 
  <label for="summary">Summary:
    <input type="text" id="summary" name="summary" minlength = 2 maxlength = 400 placeholder="Describe the trip" required>
    </label>

    <input type="submit" name = "submit" value = "Submit new trip!">

</form>
<br>
<br>
<br>
</div>
  
<div class = "contentmaincontainer">

  <p> Alternatively, you may choose from the following options: </p>
  <br>
  <p> <a href = "all-adventures.php">Click here to VIEW all existing adventures.</a> </p>
  <br>
  <p> <a href = admin-delete.php> Click here to REMOVE all existing adventures from the database.</a></p>

</div>
<br>


</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>