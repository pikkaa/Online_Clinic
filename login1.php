			<?php
			session_start();
			$a=$_POST['id'];
			$b=$_POST['password'];
			mysql_connect("localhost","root","")or die(mysql_error());
			mysql_select_db("online_clinic")or die(mysql_error());
			$c=mysql_query("select * from appointment where id='$a' && password='$b'");
			if($d=mysql_fetch_array($c))
			{
				$_SESSION['id']=$a;
				header("location:user.php");
			}
			else
			{
				header("location:login.php");
			}
			?>