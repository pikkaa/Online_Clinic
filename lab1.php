			<?php
			session_start();
			$a=$_POST['username'];
			$b=$_POST['password'];
			mysql_connect("localhost","root","")or die(mysql_error());
			mysql_select_db("online_clinic")or die(mysql_error());
			$c=mysql_query("select * from lab where username='$a' && password='$b'");
			if($d=mysql_fetch_array($c))
			{
				$_SESSION['username']=$a;
				header("location:lab_test.php");
			}
			else
			{
				header("location:test1.php");
			}
			?>