<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$college = $_POST['college'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$college = stripslashes($college);
$college = addslashes($college);
$mob = stripslashes($mob);
$mob = addslashes($mob);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$gender' , '$college','$email' ,'$mob', '$password')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;
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
}
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>