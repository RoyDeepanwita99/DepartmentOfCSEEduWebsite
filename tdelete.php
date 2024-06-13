<?php
 include "dbcont.php";
$id = $_GET['del_id'];

$sql="DELETE FROM post where id='$id'";
if($conn->query($sql))
{
	header('Location:registration.php');
}
else  "Delete operation failed";

$conn->close();

?>