<?php
	$q=$_GET['q'];
$s=mysqli_connect("localhost","root","","online_clinic");
$sql=mysqli_query($s,"select * from doctor_details where doctorname = '$q'");

while($s=mysqli_fetch_array($sql))
{
echo $s['doctorname'].",";
}

?>