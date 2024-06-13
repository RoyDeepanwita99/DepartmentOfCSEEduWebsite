<?php
include "dbcont.php";
//$id=$_POST['f_id'];
$user=$_POST['f_user'];
$cmnt=$_POST['f_cmnt'];
$c_id=$_POST['c_id'];

$smt = "SELECT * FROM comment1 WHERE username='$user' AND cmnt_id = '$c_id'";
$result= $conn->query($smt);

if($result->num_rows==0)
{
	$sql = "INSERT INTO comment1 (username,cmnt,cmnt_id) 
		VALUES ('$user', '$cmnt','$c_id')";

		
		if($conn->query($sql))
		{
			header('location:home.php');	
		}
		else
		{
			echo "insertion failed";
		}
}
else{
	echo "Already you comment this post";
	//header("Location:registration.php");
	
	}

$conn->close();
?>

