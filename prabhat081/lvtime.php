<?php
    $username1 = $_POST['username'];
	     $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
         mysql_select_db("system") or die("Couldn't find data in db");
		 $query= mysql_query("SELECT * From systemdetail where username='$username1'");
         $numrows = mysql_num_rows($query);
		 if($numrows!=0)
		 {
		    while ($row = mysql_fetch_assoc($query))
	         	{
		        	$dbat = $row['atime'];
		        }
		    $lvtime=mysql_query("UPDATE systemdetail set ltime='$_POST[leavetime]' WHERE username='$username1'");
            if($lvtime)			
		         echo"successfully update";
			mysql_query("UPDATE sysdetail set ltime='$_POST[leavetime]' WHERE username='$username1' and atime='$dbat'");
			
		 }
		 else
		   die("no records found");
?>	   