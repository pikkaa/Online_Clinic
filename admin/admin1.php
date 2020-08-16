			<?php
			session_start();
			$a=$_POST['uname'];
			$b=$_POST['password'];
			mysql_connect("localhost","root","")or die(mysql_error());
			mysql_select_db("online_clinic")or die(mysql_error());
			$c=mysql_query("select * from admin where uname='$a' && password='$b'");
			if($d=mysql_fetch_array($c))
			{
				$_SESSION['uname']=$a;
				header("location:doc.php");
			}
			else
			{
				header("location:admin.php");
			}
			?>