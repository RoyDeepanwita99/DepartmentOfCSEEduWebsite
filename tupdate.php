<?php
include "dbcont.php";

$id=$_POST['f_id'];
$title=$_POST['f_title'];
$des=$_POST['f_dess'];
$author=$_POST['f_author'];
$tags=$_POST['f_tags'];
$uid=$_POST['f_uid'];
$sql="UPDATE post SET title='$title',body='$des',author='$author',tags='$tags' where id='$id'";
if ($conn->query($sql) === TRUE) {
	header('Location:registration.php');
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>