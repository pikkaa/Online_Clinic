			<?php
			session_start();
			$a=$_POST['docid'];
			$b=$_POST['password'];
			$dept=$_POST['dept'];
			mysql_connect("localhost","root","")or die(mysql_error());
			mysql_select_db("online_clinic")or die(mysql_error());
			$c=mysql_query("select * from doctor_details where docid='$a' && password='$b'");
			if($d=mysql_fetch_array($c))
			{
				$_SESSION['docid']=$a;
				$_SESSION['$dept']=$_POST['dept'];
				header("location:doctor.php");
			}
			else
			{
				header("location:doc_login.php");
			}
			?>