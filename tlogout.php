<?php

session_start();
session_unset();
header('Location:index.php');

/*if(isset($_SESSION['username'])){
    session_destroy();
    header('Location:login.php');
}
else{
	echo "Error occur";
}*/

?>