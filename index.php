<!DOCTYPE html>

<html lang="en">


<head><title>Blood Donation System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style> 

table, th, td 
	{ border: 1px solid white;
	  border-collapse: collapse;
	table-layout: fixed;
        width: 210px;}
	th,td
	{padding: 20px;
          text-align: centre;} 
.w3-myfont {
  font-family: "Comic Sans MS", cursive, sans-serif;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>

<body>

<nav  class="navbar navbar-expand-sm bg-danger navbar-dark">
  <div class="container-fluid">
  	<div class="container-header" >
      <a class="navbar-brand" href="home.php" style="padding-top:5px">
      <img src="blood1.png" alt="Logo" style="width:50px">
      </a>
    </div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <ul class=" nav navbar-nav">
      <li><a href="home.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
      <li><a href="Donor.php">Donor</a></li>
      <li><a href="Patient.php">Patient</a></li>
      <li><a href="hospital.php"><i class="fa fa-fw fa-ambulance"></i>Hospital</a></li>
      <li><a href="bank.php"><i class="fa fa-fw fa-bank"></i>Bank</a></li>
      <li><a href="connections.php">Connections</a></li>
      <li><a href="available-bloods.php">Available Bloods</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
	<li><a href="https://docs.google.com/document/d/e/2PACX-1vTwAxnodGn1_rCGv_5JvyuypP2RLgABIa_Fvftvc6xwXZYSiOTk8flJyuYd4OFZuGA7tBOcTxJK2r-Q/pub"></i>Help</a></li>
        <li><a href="aboutus.php"><i class="fa fa-fw fa-envelope"></i>contact us</a></li>
        </ul>
  </div>
</nav>

<?php

// Create connection
require('connect.php');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from donor";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row

//for donor
echo '<div class="tab-content">';
echo '<div id="donor" class="tab-pane fade in active">';
echo '<table table-hover class="centerTable">';

echo '<tr bgcolor=#F6DDCC style="color:#00006a">

<h2 style="color:Red"; align="center" class="w3-myfont">Donor Information</h2>
<br/>
<th>First name</th>
<th>Last Name</th>
<th>Donor ID</th>
<th>Date of Birth</th>
<th>Phone Number</th>
<th>Blood ID</th>
</tr>';

   while($row = $result->fetch_assoc())
	 {
	echo '<tr bgcolor=#FDF2E9 style="color:#00006a">';
        echo '<td>' .$row["F_name"]. '</td>';
        echo '<td>' .$row["L_name"] . '</td>';
        echo '<td>' .$row["Donor_ID"] . '</td>';
	echo '<td>' .$row["Date_of_Birth"] . '</td>';
	echo '<td>' .$row["Phone_number"] . '</td>';
	echo '<td>' .$row["Blood_ID"]. '</td>';
	echo '</tr>';
   	 }

 echo'</table><br/>';
} 

else {echo "0 results";}

echo '</div>';
echo '</div>';

$conn->close();
?>
</body>
</html>
