<?php
include('header.php');
?>

	
      <table width="400px" align="center" style="margin-top:85px;margin-bottom:85px">
        <tr>
          <th colspan="2">
		  <?php
		  $docid=$_REQUEST['docid'];
		  $password=$_REQUEST['oldpass'];
		  $npassword=$_REQUEST['newpass'];
		  mysql_connect("localhost","root","");
		  $a=mysql_select_db("online_clinic");
		  $result=mysql_query("select *from doctor_details where docid='$docid' and password='$password' ")
		  or die(mysql_error());
		  $query=mysql_query("update doctor_details set password='$npassword' where docid='$docid' " )
		  or die(mysql_error());
          ?>
		  </th>
          </tr>
          <tr>
          <th colspan="2"><div align="center" class="style2"><strong><font color="#CC0066" size="+3">Congratulations ! <br />
          Your Password Has Been <font color="#3333FF">Changed ! </font></font></strong></div></td>
          </tr>
          <tr><th><form action="doc_login.php" method="post"><input type="submit" value="Click here for login" /></form></th></tr>
      </table>
<?php
include('footer.php');
?>

