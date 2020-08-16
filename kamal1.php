<?php


//get the q parameter from URL
$q=$_GET["q"];
						
//lookup all hints from array if length of q>0
if(strlen($q) > 0)
  {
  					$hint="";
					mysql_connect("localhost","root","")or die(mysql_error());
					mysql_select_db("online_clinic")or die(mysql_error());
					$r=mysql_query("select * from doctor_details");
					while($s=mysql_fetch_array($r))
					{
						 $fname=$s['doctorname'];
						
    if (strtolower($q)==strtolower(substr($fname,0,strlen($q))))
      {
		  $email=$s['emailid'];
		  $path=$s['image'];
		  
      if ($hint=="")
        {

        $hint="
		<tr>
		<th><img src=".$path." height=60 width=60></th>
		<th><a href=staff_details.php?a=".$s['docid']." style=text-decoration:none;color:blue;font-size:20px;font-family:gabriola>".$fname."</a></th>
		</tr>
		";
        }
      else
        {
        $hint=$hint."<tr>
					<th> <img src=".$path." height=60 width=60> </th>
		   			<th> <a href=staff_details.php?a=".$s['docid']." style=text-decoration:none;color:blue;font-size:20px;font-family:gabriola>".$fname."</a> </th>
					</tr>";

        }
      }
    }
  }
echo"</table>";
// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="<font style=color:red;font-size:24px;font-family:gabriola;>No Results Found</font>";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>