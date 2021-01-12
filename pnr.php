<!DOCTYPE html>
<html>
<title>Pocket Travels</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
body{font-family: Montserrat; background-image: url("https://www.hextraveler.com/wp-content/uploads/2019/08/avion-en-vuelo.jpg");
 background-repeat: no-repeat;
  background-size: 100%;
background-attachment: fixed;  }
span{
	font-family:myFont;
}
ul {
  list-style-type: none;
  margin: 0px;
  padding: 0px;
  overflow: hidden;
  background-color: black;
  position: fixed;
  top: 0;
  left:0;
   right:0;
  width: 100%;
}

li {
  float:left;
  font-size:20px;
}

li.b a{
  display: block;
  color: white;
  text-align: center;
  padding: 23px 16px;
  text-decoration: none;
}
li.b a:hover {
  color:#00a1c6;
  text-decoration: none;
}
.tracker{ 
text-align:center;
color:white; 
padding:60px;
padding-top:60px;
font-size:25px;
margin:30%;
margin-bottom:5%;
border-radius:20px;
margin-top:0px;
background: rgba(0, 0, 0, 0.9);
}

h1{ color: black; font-size: 40px; text-align:center;}

p{ color: black; font-size: 30px; text-align:center;}
.space{ padding-top:75px;}
</style>
<body>
<?php
$pnr=$_POST['pnrs'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ticketinfo WHERE pnr=$pnr";
$result = $conn->query($sql);
?>
<div class="space">
  <span><h1>Status</h1>	</span>
  <div class="tracker">
  <?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<span>Passenger Name:- </span><br>" . $row["fname"]. " " . $row["lname"]. "<br><br><span>Flight Number:- </span><br>" . $row["flno"]. "<br><br><span>Departure:- </span><br>" . $row["depart"]. "<br><br><span>Arrival:- </span><br>" . $row["arrival"]. "<br><br><span>Class:- </span><br>" . $row["class"]. "<br><br><span>Date:- </span><br>" . $row["date"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
</div>
    <ul>
	<span>
	<li>
      <a href="index.html"><img src="airologo.png"></a></li>
	  <li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li>
  <li class="b"><a href="dashboard.php">Dashboard</a></li>
  <li class="b"><a href="locations.html">Locations</a></li>
  <li class="b"><a href="booking.html">Booking</a></li>
  <li class="b"><a href="flight_tracker.html">Flight Tracking</a></li>
  </ul>

</body>
</html>    