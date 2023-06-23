<!DOCTYPE html>
<html>
<body>
<center>
<h2> DISPLAY MARKLIST </h2><hr><br><br>
<?php
	include("connection.php");
	$sql="select rollno,name,physics,english,maths,total from marks";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		echo"<table border=1><tr><td>Roll No</td><td>Name</td><td>Physics</td><td>English</td>
		       <td>maths</td><td>total</td></tr>";
		while($row=$result->fetch_array())
		{
			echo"<tr>";
			echo"<td>".$row['rollno']."</td>";
			echo"<td>".$row['name']."</td>";
			echo"<td>".$row['physics']."</td>";
			echo"<td>".$row['english']."</td>";
			echo"<td>".$row['maths']."</td>";
			echo"<td>".$row['total']."</td>";
			echo"</tr>";
			
		}
		echo"</tabl>";
	}
  else
		echo"0 results";
?>
<a href="home.php">Home</a>
</center>
</body>
</html>