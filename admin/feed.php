<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="options">
<table width="100%" style="background:url(images/bg-header.jpg)" height="60px">
<tr>
<th><a href="doc.php">Doctors in Clinic</a></th>
<th><a href="pat.php">List of Patients</a></th>
<th><a href="feed.php" class="current">Feedback given to Clinic</a></th>
<th><a href="logout(admin).php">Logout</a></th>
</tr>
</table>
</div>
<div class="tablefeed">
<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("online_clinic")or die(mysql_error());
$r=mysql_query("select * from feedback");
?>
<table width="100%">
<tr>
<th width="60px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Name</th><th width="150px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Date of Visit</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold;">Address</th><th width="130px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Mobile Number</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Email ID</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Comments</th><th width="120px" style="border-bottom:#996699 solid 2px;color:#996699;font-size:20px;font-family:Script MT Bold">Action</th>
</tr>
<?php
while($s=mysql_fetch_array($r))
{
echo "<tr><th>".$s['fname']."</th><th>".$s['dov']."</th><th>".$s['address']."</th><th>".$s['mno']."</th><th>".$s['eid']."</th><th>".$s['comments']."</th><th><a href=view(feed).php?a=".$s['eid'].">View</a>/<a href=delete(feed).php?a=".$s['eid'].">Delete</a></th></tr>";
}
?>
</table>
</div>
</body>
</html>