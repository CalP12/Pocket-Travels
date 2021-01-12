<?php

session_start();
$pnr=mt_rand(10000,99999);
$_SESSION['pnr']=$pnr;
$servername='localhost';
$username='root';
$password='root';
$dbname = "mydb";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['save']))
{	 
	$from=$_SESSION['f'];
	$to=$_SESSION['t'];
	$class=$_SESSION['c'];
	$date=$_SESSION['d'];
	$_SESSION['fname']=$_POST['fname'];
	$_SESSION['lname']=$_POST['lname'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['phone']=$_POST['phone'];
	$f_name=$_SESSION['fname'];
	$l_name=$_SESSION['lname'];
	$e_mail=$_SESSION['email'];
	$p_hone=$_SESSION['phone'];
	$flno="9W-0817";
	
	$passno=$_POST['passpp'];
	$passdate=$_POST['pexpiry'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
	
	
     $sql = "INSERT INTO passengerinfo (fname,lname,passno,passdate,address,city,pin)
	 VALUES ('$f_name','$l_name','$passno','$passdate','$address','$city','$pin'); INSERT INTO ticketinfo (fname,lname,email,phone,depart,arrival,class,date,pnr,flno)
	 VALUES ('$f_name','$l_name','$e_mail','$p_hone','$from','$to','$class','$date','$pnr','$flno')";
	 
	 if (mysqli_multi_query($conn, $sql)) {
		header("Location: jet2.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
