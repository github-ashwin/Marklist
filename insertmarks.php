<html>
<body>
<center>
<form action="" method="POST">
<h2>INSERT MARKS INTO DATABASE</h2><hr>
<table>
		<tr><td>Roll No</td><td><input type="num" name="rollno"></td>
		<tr><td>Name</td><td><input type="text" name="name"></td>
		<tr><td> Physics marks(out of 50) </td><td><input type="num" name="phy"></td>
		<tr><td> English marks(out of 50) </td> <td><input type="num"name="eng"></td>
		<tr><td>Maths marks (out of 50) </td> <td> <input type="num"name="maths"></td>
</table>
		<br><br><input type="submit" name="submit" value="INSERT">
</form>
<?php
include("connection.php");
if($_POST)
{
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$phy=$_POST['phy'];
	$chem=$_POST['eng'];
	$maths=$_POST['maths'];
	$total=$phy+$chem+$maths;
	$query="insert into marks(rollno,name,physics,english,maths,total) 
	       VALUES ('$rollno','$name','$phy','$chem','$maths','$total')";
	$result=mysqli_query($conn,$query);
	if(!$result)
		{
			$message="invalid Query".mysqli_error($conn);
			die($message);
		}
	echo "Marks inserted to DB successfully";
}
?>
 </center
> </body>
 </html>