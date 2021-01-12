<?php
include_once 'source/session.php'; ?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>
<ul>
<li><a href="index.html"><img src="airologo.png"></a></li>
<li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li>
  <li class="b"><a href="dashboard.php">Dashboard</a></li>
  <li class="b"><a href="locations.html">Locations</a></li>
  <li class="b"><a href="booking.html">Booking</a></li>
  <li class="b"><a href="flight_tracker.html">Flight Tracking</a></li>
  </ul>
  <div class="space">						
<div class = "center">
    <?php echo "<h1> Welcome ".$_SESSION['username']."!</h1>" ?>
	<a class="one" href="booking.html">

	<img class="d"src="logos/ticket.png">&nbsp;&nbsp;&nbsp;
     <h2>Proceed to booking</h2>

     </a><br>
	 <a class="one" href="" onclick="return disappear();">
	<img class="e"src="logos/glass.png">&nbsp;&nbsp;&nbsp;
     <h2>PNR Status</h2>
     </a>
	 <div class="dis" id="way">
	 <form action="pnr.php" method="post">
	 <input type="number" name="pnrs" class="email"></input>
	 <input type="submit"></input>
	 </form>
	 </div>
	 <br>
	    <a class="button"href="logout.php">Logout</a>
</div>
</div>

</body>
<style>
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
.transbox {
  border-radius: 50px;
  margin: 10px;
  padding: 24px;
  margin-right: 300px;
  margin-left: 300px;
  background-color: #000000;
  color: white;
  background: rgba(0, 0, 0, 0.9);
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
.email{
	margin:auto;
	font-size: 27px;
      color: white;
      line-height: 1.2;
      display: block;
      width: 20%;
      height: 30px;
      background: rgba(0, 0, 0, 0.4);
	  }
body {
  background-image: url("https://www.hextraveler.com/wp-content/uploads/2019/08/avion-en-vuelo.jpg");
  background-repeat: no-repeat;
  background-size: 100% ;
  font-family: myFont; 
}
h2{
	display:inline; vertical-align:middle;
}
img.d{ width:70px;vertical-align:middle;}
img.e{ width:50px;vertical-align:middle; height:50px;}
.space{ padding:75px;}

.center {
	text-align: center;
		}
		a.one:link, a.one:visited {
	border-radius: 40px;
  	margin: 10px;
 	padding: 20px;
 	margin-right: 100px;
 	margin-left: 100px;
  	background-color: #000000;
  	color: white;
  	opacity: 0.8; 
	vertical-align: middle;
	text-align: justify;
	font-size:20px;
	text-decoration: none;
	display: inline-block;
}
a.one:hover, a.one:active {
  background-color:white;
  color:black;
}
</style>
<script>
var x = document.getElementById("way");
  	x.style.display = "none";
function disappear() {

  	x.style.display = "block"; return false;
}

</script>

</style>
</html>