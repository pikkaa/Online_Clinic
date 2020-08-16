<?php
$a=$_POST['id'];
$b=$_POST['title'];
$c=$_POST['fname'];
$d=$_POST['lname'];
$e=$_POST['gender'];
$f=$_POST['status'];
$g=$_POST['date'];
$h=$_POST['address'];
$i=$_POST['mno'];
$j=$_POST['eid'];
$k=$_POST['password'];
$l=$_POST['reason'];
$m=$_POST['date1'];
$n=$_POST['department'];
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("online_clinic") or die(mysql_error());
$t=mysql_query("select * from appointment where eid='$j'");
if($u=mysql_fetch_array($t))
{
	echo "<script>alert('this email already exist')</script>";
	include("appointment.php");
}
else
{
mysql_query("insert into appointment values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')")or die(mysql_error());
header("location:patient_id.php");
}
?>