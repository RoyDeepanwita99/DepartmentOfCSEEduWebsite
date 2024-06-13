<?php
session_start();
if(isset($_SESSION["email"])){
    session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
$result = mysqli_query($con,"SELECT name, college FROM user WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
    while($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
        $college = $row['college'];
    }
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    if($college == 1){
        header("location:1stindex.php?q=1");
    }
    elseif($college == 2){
        header("location:2stindex.php?q=1");
    } 
    elseif($college == 3){
        header("location:3stindex.php?q=1");
    } 
    elseif($college == 4){
        header("location:4stindex.php?q=1");
    } 
   elseif($college == 5){
        header("location:5stindex.php?q=1");
    } else {
        header("location:index.php?q=1");
    }
} else {
    header("location:$ref?w=Wrong Username or Password");
}
?>
