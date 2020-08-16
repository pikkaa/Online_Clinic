<?php
	session_start();
	$a=$_SESSION['id'];
	$tym=$_SESSION['tym'];
	$test=$_SESSION['test'];
	$i=$_POST['doa'];
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("online_clinic") or die(mysql_error());
	$t=mysql_query("select * from appointment where id='$a'");
	if($u=mysql_fetch_array($t))
	{
	$fname=$u['fname'];
	$gender=$u['gender'];
	$address=$u['address'];
	$mno=$u['mno'];	
	$email=$u['eid'];
	}
	mysql_query("insert into lab_test values('','$fname','$gender','$address','$mno','$email','$tym','$i','$test','Not_Report')")or die(mysql_error());
	header("location:user.php");
	
?>