<html>
<link rel="stylesheet" href="style.css">
<body>
<ul>
<li><a href="index.html"><img src="airologo.png"></a></li>
<li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li><li class="b"><a href=""></a></li>
  <li class="b"><a href="locations.html">Locations</a></li>
  <li class="b"><a href="booking.html">Booking</a></li>
  <li class="b"><a href="#contact">PNR Status</a></li>
  <li class="b"><a href="flight_tracker.html">Flight Tracking</a></li>
  </ul>
<div class="center">
<h1>Flights to
<span id ="too" class="black"></span> 
from
<span id ="from" class="black"></span>
</h1>
<br>
<a  class="one"  href="air.html">
<img class="a" src="logos/airindia.png">
<b>Air India</b>
(IX-1813)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id = "fl1"> </span> 
&nbsp;&nbsp;
<b>
13:05
&nbsp;
✈
&nbsp;
15:30
</b>
&nbsp;&nbsp;
<span id = "fl2"></span>
&nbsp;&nbsp;&nbsp;&nbsp;

<div class="str">
6,800₹
</div>
</a>

<a class="one" href="spice.html">
<img class="a" src="https://storage.googleapis.com/media.helloumi.com/channels/0_TBRoNQz.png">
<b>Spice Jet</b>(SG-146)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id = "fl3"> </span> 
&nbsp;&nbsp;
<b>
18:10
&nbsp;
✈
&nbsp;
04:00
</b>
&nbsp;&nbsp;
<span id = "fl4"></span>
&nbsp;&nbsp;&nbsp;&nbsp;
<div class="str">
7,940₹
</div>
</a>

<a  class="one" href="indi.html">
<img class="a" src="https://seeklogo.com/images/I/indigo-logo-EDBB4B3C09-seeklogo.com.png">
<b>Indigo</b>(6E-8497)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id = "fl5"> </span> 
&nbsp;&nbsp;
<b>
11:40
&nbsp;
✈
&nbsp;
20:40
</b>
&nbsp;&nbsp;
<span id = "fl6"></span>
&nbsp;&nbsp;&nbsp;&nbsp;
<div class="str">
9,600₹
</div>
</a>

<a  class="one"  href="jet.html">
<img class="a" src="https://cdn.ek.aero/english/images/Jet_Airways_tcm233-1083202.png">
<b>Jet Airways</b>(9W-0817)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id = "fl7"> </span> 
&nbsp;&nbsp;
<b>
16:10
&nbsp;
✈
&nbsp;
15:30
</b>
&nbsp;&nbsp;
<span id = "fl8"></span>
&nbsp;&nbsp;&nbsp;&nbsp;
<div class="str">
6,830₹
</div>
</a>

<a  class="one"  href="emir.html">
<img class="a" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Emirates_logo.svg/967px-Emirates_logo.svg.png">
<b>Emirates</b>(EK-0148)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id = "fl9"> </span> 
&nbsp;&nbsp;
<b>
13:05
&nbsp;
✈
&nbsp;
15:30
</b>
&nbsp;&nbsp;
<span id = "fl0"></span>
&nbsp;&nbsp;&nbsp;&nbsp;
<div class="str">
11,440₹
</div>
</a>
</div>
<script>
	from=localStorage.getItem("from");
	toc=localStorage.getItem("tob");
document.getElementById("from").innerHTML=from;
document.getElementById("too").innerHTML=toc;
document.getElementById("fl1").innerHTML=from;
document.getElementById("fl2").innerHTML=toc;
document.getElementById("fl3").innerHTML=from;
document.getElementById("fl4").innerHTML=toc;
document.getElementById("fl5").innerHTML=from;
document.getElementById("fl6").innerHTML=toc;
document.getElementById("fl7").innerHTML=from;
document.getElementById("fl8").innerHTML=toc;
document.getElementById("fl9").innerHTML=from;
document.getElementById("fl0").innerHTML=toc;

</script>
</body>
<?php 

// Initialize the session 
session_start(); 
$_SESSION['c'] = $_POST['clax']; 

$_SESSION['t'] = $_POST['to']; 
  
$_SESSION['f'] 
        = $_POST['from']; 
  
$_SESSION['d'] 
		= $_POST['depart']; 

?> 
<style>
ul {
  list-style-type: none;
  margin: 0px;
  padding: 0px;
  overflow: hidden;
  background-color: black;
  position: fixed;
  z-index:3;
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
body {
  background-image: url("https://www.hextraveler.com/wp-content/uploads/2019/08/avion-en-vuelo.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
  font-family:myFont;
}
.str{
	font-weight:bold;
	display: table;
    margin: 0px auto 0px auto; /* keep the table centered */
    padding:5px;font-size:20px;background-color:white;color:#000000;
}
h1{
	color: white;
	font-family: Montserrat;
	font-size: 40px;
}
.black{
	color:black;
}
.center {
	text-align: center;
	padding-top:75px;
	position:relative;
	z-index:2;
}
.right{
	text-align:right;
}
.new{
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
	font-family: Montserrat;
	text-decoration: none;
	display: inline-block;
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
	font-family: Montserrat;
	text-decoration: none;
	display: inline-block;
}
a.one:hover, a.one:active {
  background-color:white;
  color:black;
}
img.a{
  vertical-align: middle;
  width: 50;
  height: 50;
  object-fit: contain;
}

	</style>
</html>