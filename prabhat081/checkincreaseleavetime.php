<?php
    $username = $_POST['username'];
	     $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
         mysql_select_db("system") or die("Couldn't find data in db");
		 $query= mysql_query("SELECT * From systemdetail where username='$username'");
         $numrows = mysql_num_rows($query);
		 if($numrows!=0)
		 {
		    echo"success";
		
		 }
		 else
		   die("no records found");
?>	   