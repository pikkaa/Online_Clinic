<html>
<head>
<title></title>
</head>
<body bgcolor="#666666" style="background:url(images/f68de2cea4c6cec2630de94478bdf4ab1.jpg);width:100%">
<?php
session_start();
if(!(isset($_SESSION['docid'])))
{
	header("location:doc_login.php");
}
$a=$_SESSION['docid'];
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("online_clinic")or die(mysql_error());
$c=mysql_query("select * from doctor_details where docid='$a'");
echo "<table width=100%>";
if($d=mysql_fetch_array($c))
{
echo "<tr><th width=50% align=left style=color:white;font-family:'Courier New', Courier, monospace>";
$doctorname=$d['doctorname'];
echo"<h1>Welcome ".$doctorname."</h1>";
$specialistin=$d['specialistin'];
echo"<h1>(".$specialistin.")</h1>";
echo "</th>";
$image = $d['image'];
echo "<th><img src=".$image."  height=180 width=150 border=1px style=margin-left:200px;border-radius:10px /> </th>";
echo"<th width=50% align=right valign=top><a href=logout(doctor).php style=font-size:20px;color:white;font-family:'Courier New', Courier, monospace;>Logout</a></th></tr>";
}
echo "</table>";
?>
<?php
$r=mysql_query("select * from book where docid='$a'")or die(mysql_error());
		echo "<table border=2 style=margin-top:30px;border-radius:50px;>
	  <tr><th width=100 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Patient Name</th>
	  <th width=50 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Gender</th>
	  <th width=80 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Marital Status</th>
	  <th width=100 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Mobile No.</th>
	  <th width=100 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Email-id</th>
	  <th width=200 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Reason for Appointment</th>
	  <th width=200 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Timing of Appointment</th>
  	  <th width=200 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Date of Appointment</th>
   	  <th width=150 style=color:pink;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>Generate Reports</th>
	  </tr>";

    while($r1 = mysql_fetch_array($r))
	{
	$sa=$r1['id'];
			$r2=mysql_query("select * from appointment where id='$sa'");
			if($r3=mysql_fetch_array($r2))
			{
			$a1=$r3['gender'];
			$a2=$r3['status'];
			$a3=$r3['mno'];
			$a4=$r3['reason'];
			$a5=$r3['eid'];
			$a6=$r3['date1'];
			}
	echo "<tr><th height=50 style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$r1['fname']."</th>
	<th height=50 style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$a1."</th>
	<th height=50 style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$a2."</th>
	<th height=50 style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$a3."</th>
	<th height=50 style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$a5."</th>
	<th height=50 style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$a4."</th>
	<th height=50 style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$r1['timings']."</th>
	<th height=50 style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;>".$a6."</th>
	<th height=50><a href=upload.php?a5=".$r3['eid']." style=color:#99CC99;font-family:'Arial Narrow', Arial, Helvetica, sans-serif;text-decoration:none>Upload</a></th></tr>";

}
echo "</table>";

?>

</body>
</html>

