<!DOCTYPE html>
<html lang="en">
<link href="maincss.css" rel="stylesheet" type="text/css"/>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="maincss.css" rel="stylesheet" type="text/css"/>
    <title>Halifax Canoe and Kayak - Database Cleared</title>
</head>

<header>
<?php include 'header.php';?>
</header>
    
<main>

<br>
<br>

<?php

// delete all table data
$sql = "DELETE FROM adventuretable"; ?>

<h2> 
  <?php  
    if(mysqli_query($conn, $sql)){
    echo "Deletion successful.";

  } else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
  }

  mysqli_close($conn); 
  ?> 
</h2>







<br>
<br>

<div class = "contentmaincontainer">

    <p> You may choose from the following options:</p>
    <br>
    <p> <a href = "all-adventures.php">Click here to VIEW all existing adventures.</a> </p>
    <br>
    <p> <a href = "admin-add.php">Click here to ADD an adventure.</a> </p>



    <br>

</div>

</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>

