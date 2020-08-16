<?php
session_start();
$test=$_SESSION['test'];
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("online_clinic") or die(mysql_error());
$h=$_POST['timings'];
$q=mysql_query("select * from lab_test where timings='$h' and test='$test'");
if($dd=mysql_fetch_array($q))
{
echo "<script>alert(This timings are already booked)</script>";
header("location:timings(test)1.php?a=".$h);
}
else
{
$_SESSION['tym']=$h;

header("location:lab(registration).php");	
	}
?>
