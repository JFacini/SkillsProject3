<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="maincss.css" rel="stylesheet" type="text/css"/>
    <title>Halifax Canoe and Kayak | Upcoming Adventures</title>
</head>

<header>
<?php include 'header.php';?>
</header>
    
    <main>

  <!--A container class is used for each half of the page - one for the top image/text, the other for the content below-->

      <div class="topmaincontainer">
       
        <img src = "https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg" alt = "canoe trip photo" id = "canoeimg" width = "100%" height="auto">
        <div class = "center">Come Experience Canada!</div>
      
      </div>

    <br>
    <br>
    <hr>

      <div class = "contentmaincontainer">


        <br>

        <h2>Upcoming Adventures</h2>

        <br>
        <br>
        
  <!--a separate class is used for links to the trip pages, to allow for easy styling-->

<?php

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT heading, tripDate, duration, summary FROM adventuretable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Please choose from the following scheduled adventures: <br><br><br>";

  // if there is data in the adventures table, echo the data for each called variable until all have been displayed
  while($row = $result->fetch_assoc()) {
    echo "<a class = 'triplinks' href='#'>".$row["heading"]."</a>
    <br>
    <br>
    <p>Date: ".$row["tripDate"]."</p>
    <p>Duration: ".$row["duration"]." days</p>
    <br>
    <p>Summary:</p>
    <br>
    <p> ".$row["summary"]."</p>

    <br>
    <br>
    <br>";
  }

 
    // if the connection is successful but there is no data in the table, echo the following:  
} else {
  echo "No adventures are currently scheduled! See you next season! <br><br>";
}
$conn->close();

?>

      </div>
      
      
    </main>

    <footer>
     <?php include 'footer.php';?>
    </footer>

</html>