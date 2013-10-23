<?php
     $connect=mysql_connect("localhost","root","") or die("Couldn't connect!");
         mysql_select_db("annex") or die("Couldn't find data in db");
		  $query= mysql_query("SELECT * From sysdetail where sysnum>0&&sysnum<=100");
         $numrows = mysql_num_rows($query);
		 if($numrows!=0)
		 {
		    Print "<table border cellpadding=3>";
			print "<tr>";
			print "<th>UserName:</th><th>SystemNumber:</th><th>ArivalTime:</th><th>LeaveTime:</th> ";
		     while ($row = mysql_fetch_assoc($query))
			{
				print "<tr>";
				Print "<td>".$row['username'] . "</td> "; 
				Print " <td>".$row['sysnum'] . "</td> "; 
				Print "<td>".$row['atime'] . "</td> "; 
				//Print "<td>".$row['ltime'] . "</td> ";
				echo "<td>",$row['lhour'];
				print ":";
				echo $row['ltime'],"</td>";
				//Print "<td>".$row['lhour'] . "</td> </tr>"; 
			}
			print "</table>";
		
		 }
		 else
		   die("no records found");
?>