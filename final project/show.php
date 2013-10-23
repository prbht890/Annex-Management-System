<html>
<body bgcolor="gray">
<a href="show.php" style="text-decoration:none;"><input type="button" value="show"></a><br><br><br>
</body>
</html>
<?php
    $connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
    mysql_select_db("annex") or die("Couldn't find data in db");
    $query= mysql_query("SELECT sysnum From systemdetail");
    $numrows = mysql_num_rows($query);
	if ($numrows!=0)
	{
	     Print "<table border cellpadding=3>";
		 print "<tr>";
		 
		 print"<th>";
	    echo "system is booked";	
        print "</th>";	
         print "<td>";		
		$j=0;
	 while ($row = mysql_fetch_assoc($query))
	 	{
			Print "<b>:</b> ".$row['sysnum'] . " ";
			$ar[$j]=$row['sysnum'];
			$j++;
		}
		print "</td>";
		print "</tr>";
		print "<tr>";
		print "<th>";
		
		echo "system is avilable";
		print "</th>";
		print "<td>";
		
		
		for($i=1;$i<=100;$i++)
		{
		     $c=mysql_query("SELECT sysnum From systemdetail WHERE sysnum='$i'");
			 $numrows1 = mysql_num_rows($c);
			if(!$numrows1)
			echo" : $i ";
			
		}
		print "</td>";
		print "</tr>";
		print "</table>";
	}
	else
	 {
	    print " <table border cellpadding=3>";
		 print "<tr>";
		 print "<th>";
	     echo"system is avilable ";
		 print "</th>";
		 print "<td>";
		 for($i=1;$i<=100;$i++)
		       echo"   $i";
		print "</td>";
		print "</tr>";
		print "</table>";
		 
	 }
?>