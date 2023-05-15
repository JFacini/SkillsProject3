<!DOCTYPE html>
<html lang="en">
<link href="maincss.css" rel="stylesheet" type="text/css"/>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="maincss.css" rel="stylesheet" type="text/css"/>
    <title>Halifax Canoe and Kayak - Addition Confirmed</title>
</head>

<header>
<?php include 'header.php';?>
</header>
    
<main>

<br>
<br>

<?php
// obtain values from posted form data

        $heading = $_REQUEST['heading'];
        $tripDate = $_REQUEST['tripDate'];
        $duration = $_REQUEST['duration'];
        $summary = $_REQUEST['summary'];


// insert into database
$sql = "INSERT INTO adventuretable (heading, tripDate, duration, summary) VALUES ('$heading','$tripDate','$duration','$summary')";
?>

<h2> 
  <?php  
    if(mysqli_query($conn, $sql)){
    echo "Trip addition confirmed.";

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

<br>
<p> You may choose from the following options:</p>
<br>
<p> <a href = "all-adventures.php">Click here to VIEW all existing adventures.</a> </p>
<br>
<p> <a href = "admin-add.php">Click here to ADD another adventure.</a> </p>
<br>
<p> <a href = admin-delete.php> Click here to REMOVE all existing adventures from the database.</a></p>

<br>
<br>

</div>

</main>

    <footer>
    <?php include 'footer.php';?>
    </footer>

</html>