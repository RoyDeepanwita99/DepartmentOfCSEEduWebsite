<?php
include "dbcont.php";

$user=$_POST['f_user'];
$pass=$_POST['f_pass'];
$eml=$_POST['f_eml'];

$smt = "SELECT * FROM user WHERE username='$user'";

$result= $conn->query($smt);
if($result->num_rows==0)
{
	$sql = "INSERT INTO user (username,pass,email) 
		VALUES ('$user', '$pass', '$eml')";

		
		if($conn->query($sql))
		{
			header('location:index.php');	
		}
		else
		{
			echo "insertion failed";
		}
}
else{
	echo "username already exits try another";
	//header("Location:registration.php");
	
	}

$conn->close();
?>

