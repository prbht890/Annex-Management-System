<?php
    $username1 = $_POST['username'];
	     $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
         mysql_select_db("annex") or die("Couldn't find data in db");
		 $query= mysql_query("SELECT * From systemdetail where username='$username1'");
         $numrows = mysql_num_rows($query);
		 if($numrows!=0)
		 {		    
			    $del=mysql_query("DELETE FROM systemdetail where username='$username1'");
                if($del)				
		           echo"successfully logout";		
		 }
		 else
		   die("no records found");
?>	   