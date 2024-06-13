<?php
include "dbcont.php";

if(isset($_POST['upload']))
{
	$file = $_FILES['image']['name'];

	$upid = $_POST['id'];
    $smt = "SELECT * FROM post WHERE id='$upid'";
	$res= $conn->query($smt);

    if($res->num_rows>0){

      // $sql = "INSERT INTO post(image) VALUES('$file')";
       $sql = "UPDATE post SET image = '$file' WHERE id = '$upid' ";
	   $result = $conn->query($sql);

	    if($result){
		  move_uploaded_file($_FILES['image']['name'], "$file");
	   }
	   header('location:registration.php');

    }
    else{
    	echo "image already exits";
    }
}
?>
