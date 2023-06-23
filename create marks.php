<html>
<body>
<center>
<h2>CREATE TABLE</h2><hr>
<form action=""method="POST"><br>
<br><br><input type="submit" name="submit" value="CREATE TABLE"><br><br>
<center>
<?php
if($_POST)
{
      include("connection.php");
	  $sql="create table if not exists marks(rollno varchar(6),
	                                         name  varchar(30),
			physics int(3),						         
			english int(3),							     
	                                    maths int(3),
			total int(3))";							     
	if($conn->query($sql)===TRUE)
		echo"<br>Table created successfully";
	else
		echo"Error:".$sql."<br>".$conn->error;
	$conn->close();
}
?>
<br><a href="home.php">Home</a>
</form>
</body>
</html>