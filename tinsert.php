<?php

include "dbcont.php";
$id=$_POST['f_id'];
$athr=$_POST['f_athr'];
$title=$_POST['f_title'];
$des=$_POST['f_des'];
$tags=$_POST['f_tags'];
$uid=$_POST['f_uid'];

$smt = "SELECT * FROM post WHERE id='$id'";
$result= $conn->query($smt);
if($result->num_rows==0)
{
        $sql = "INSERT INTO post (id,title,body,author,tags,u_id) VALUES ('$id','$title', '$des', '$athr','$tags','$uid')";
		
		if($conn->query($sql))
		{
              ?>
                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <label>POST ID</label>
                    <input type="text" name="id">                
                    <input type="file" name="image">
                    <input type="submit" name="upload" value="UPLOAD">
                    </form>	
          <?php
		}
		else
		{
			echo "insertion failed";
		}
}
else{
	echo "Same post_id already exits try another";
	//header("Location:registration.php");
	
	}

$conn->close();
?>

