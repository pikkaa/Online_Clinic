<?php
$a=$_POST['fname'];
$b=$_POST['dov'];
$c=$_POST['address'];
$d=$_POST['mno'];
$e=$_POST['eid'];
$f=$_POST['comments'];
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("online_clinic") or die(mysql_error());
$r=mysql_query("select * from feedback where eid='$e'");
if($s=mysql_fetch_array($r))
{
	echo "<script>alert('this email already exist')</script>";
	include("feedback.php");
}
else
{
mysql_query("insert into feedback values('$a','$b','$c','$d','$e','$f')")or die(mysql_error());
header("location:index.php");
}
?>