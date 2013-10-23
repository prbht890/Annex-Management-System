<?php
    $username = $_POST['username'];
	if($username)
	{
	     $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
         mysql_select_db("annex") or die("Couldn't find data in db");
		 $query= mysql_query("SELECT * From studentdetail WHERE username='$username'");
         $numrows = mysql_num_rows($query);
		 if ($numrows!=0)
	     {
	         //code to login
	            while ($row = mysql_fetch_assoc($query))
	         	{
		        	$dbusername = $row['username'];
		        }
		        if($username==$dbusername)
		        {
				    date_default_timezone_set("asia/kolkata");
					$at=date('H:i:s');
					$lm=date('i:s');
					$lh=date('H')+$_POST['leavetime'];	 
					if($lh>23)
					{
					     $lh=$lh-24;
					}
					 $query1  = "INSERT INTO systemdetail (";
						$query1 .= "  username, sysnum, atime,lhour, ltime";
					$query1 .= ") VALUES (";
					$query1 .= "  '$_POST[username]', '$_POST[systemnumber]', '$at','$lh','$lm'";
						$query1 .= ")";
					$result = mysql_query($query1);

					if ($result)
					{
						echo "Success!";
					} else
					{
						die("Database query failed. " . mysql_error());
					}
			         //echo"<a href='checksystem.php'>click</a>";
					 	$query2  = "INSERT INTO sysdetail (";
						$query2 .= "  username, sysnum, atime, lhour, ltime";
						$query2 .= ") VALUES (";
						$query2 .= "  '$_POST[username]', '$_POST[systemnumber]', '$at','$lh','$lm'";
						$query2 .= ")";		
						$result1 = mysql_query($query2);

					
		        }
		       else
		          echo "Incorrect password!";
		
	      }
	     else
	        die("That user does't exist!");

	}
	else
	   die("please insert all reqired informations !");
?>