<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<!--alert message-->
<?php if(@$_GET['w']){echo'<script>alert("'.@$_GET['w'].'");</script>';}?>
<title>University of Barishal - CSE Department</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #007bff;
        }

        h2 {
            color: #007bff;
        }

        table {
            width: 100%;
         
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .description {
            font-size: 1.1em;
            line-height: 1.6;
            color: #333;
        }
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown button */
.dropdown .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .3em;
    vertical-align: middle;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent;
}

/* Dropdown menu */
.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
}

/* Dropdown menu style */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-menu a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-menu a:hover {
    background-color: #f1f1f1;
}

</style>
</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Second Semester</span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <li <?php if(@$_GET['q']==1) echo 'class="active"'; ?> >
            <a href="index.php?q=1">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li><a data-toggle="modal" href="#his"><span class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></span>&nbsp;History</a>
                        </li>
                        <li><a data-toggle="modal" href="#rank"><span class="glyphicon glyphicon-stats"
                                    aria-hidden="true"></span>&nbsp;Ranking</a>
                        </li>
        </li>

        <!-- Add this code inside the ul element to create a dropdown menu -->
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    Courses 
    </a>
    <ul class="dropdown-menu">
    <li><a href="cse1201.php?q=1">CSE-1201</a></li>
                <li><a href="cse1202.php?q=1">CSE-1202</a></li>
                <li><a href="#">CSE-1203</a></li>
                <li><a href="#">CSE-1204</a></li>
                <li><a href="#">CSE-1205</a></li>
                <li><a href="#">EEE-1206</a></li>
                <li><a href="#">EEE-1207</a></li>
                <li><a href="#">ME-1208</a></li>
                <li><a href="#">ME-1209</a></li>
    </ul>
</li>

</li>

    </ul>
</div>
<div class="container">
<h1>University of Barishal - Department of Computer Science & Engineering</h1>
    <h2>2nd Semester Curriculum</h2>

  
    <table>
        <tr>
            <th>Course Title</th>
            <th>Course Code</th>
            <th>Credit</th>
            <th>Hours</th>
        </tr>
        <tr>
            <td>Data Structures</td>
            <td>CSE-1201</td>
            <td>3</td>
            <td>45</td>
        </tr>
        <tr>
            <td>Data Structures Lab</td>
            <td>CSE-1202</td>
            <td>0.75</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Discrete Mathematics</td>
            <td>CSE-1203</td>
            <td>3</td>
            <td>45</td>
        </tr>
        <tr>
            <td>Discrete Mathematics Lab</td>
            <td>CSE-1204</td>
            <td>0.75</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Introduction to Electrial Engineering </td>
            <td>EEE-1205</td>
            <td>3</td>
            <td>45</td>
        </tr>
        <tr>
            <td>Introduction to Electrial Engineering Lab</td>
            <td>EEE-1206</td>
            <td>1.5</td>
            <td>45</td>
        </tr>
        <tr>
            <td>Basic Mechanical Engineering</td>
            <td>EEE-1207</td>
            <td>3</td>
            <td>45</td>
        </tr>
        <tr>
            <td>Engineering Drawing</td>
            <td>EEE-1208</td>
            <td>2</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Integral Calculus,Ordinary and Partial Differential Equations and Series Solutions</td>
            <td>MATH-1209</td>
            <td>3</td>
            <td>45</td>
        </tr>
        <tr>
            <td>Statistics and Probaility</td>
            <td>STAT-1211</td>
            <td>3</td>
            <td>45</td>
        </tr>
    </table>

    <div class="description">
        <h2>Description:</h2>
        <p>The 2nd semester curriculum at the Department of Computer Science & Engineering at the University of Barishal offers a comprehensive set of courses designed to provide students with in-depth knowledge and practical skills.</p>

        <p><strong>Data Structures (CSE-1201):</strong> This course dives into the intricacies of microprocessors and microcontrollers, exploring their architectures and applications. With 45 hours of study, students gain a deep understanding of these fundamental components of modern computing systems.</p>

        <p><strong>Data Structures Lab (CSE-1202):</strong> In this lab-based course, students apply their theoretical knowledge, working hands-on with assembly language, microprocessors, and microcontrollers. Through 45 hours of practical sessions, students enhance their programming and problem-solving skills.</p>
        <p><strong>Discrete Mathematics (CSE-1203):</strong>Focusing on software engineering principles, this course equips students with methodologies for systematic software development and information system design. The 45-hour curriculum emphasizes both theory and practical applications.</p>
        <p><strong> Discrete MathematicsLab (CSE-1204): </strong>In the lab sessions, students engage in real-world software engineering projects, honing their teamwork and project management abilities. Through 45 hours of guided practical work, students learn to develop robust software systems. </p>
        <p><strong> Computer Networks (CSE-1205): </strong>This course explores the architecture, protocols, and technologies that underpin modern computer networks. Through 45 hours of study, students delve into topics such as network design, implementation, and security, preparing them for the complexities of networking in the digital age.</p>
        <p><strong>  Computer Networks Lab (CSE-1206):</strong> Through hands-on exercises and simulations, students in this lab course gain practical experience in configuring and troubleshooting computer networks. The 45-hour lab sessions enhance their skills in network administration and troubleshooting.</p>
        <p><strong> Numerical Methods (CSE-1207): </strong>This course introduces numerical techniques used for solving mathematical problems, providing students with the computational skills necessary for scientific and engineering applications. With 45 hours of study, students learn algorithms and methods for accurate numerical solutions. </p>
        <p><strong>  Financial and Managerial Accounting (HUM-1209):</strong> In this course, students gain insights into financial and managerial accounting principles. Over 30 hours, students learn to analyze financial statements, understand cost behaviors, and make informed managerial decisions based on accounting data.</p>

        <p>In this semester, students are not only equipped with theoretical knowledge but are also provided with extensive practical experiences through lab sessions, enabling them to apply their learning in real-world scenarios. Through these courses, the Department of Computer Science & Engineering at the University of Barishal prepares students for the challenges of the rapidly evolving field of computer science, ensuring they graduate with a strong foundation and practical skills necessary for successful careers.</p>
    </div>
    </div>


    <div class="modal fade" id="his">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">History</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php
//history start
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
}
echo'</table></div>';
?>

                </div>
            </div>
        </div>
    </div>



<div class="modal fade" id="rank">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">Ranking</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
               
                <?php

                //ranking start
                $q = mysqli_query($con, "SELECT * FROM rank WHERE email IN (SELECT email FROM user WHERE college = (SELECT college FROM user WHERE email = '{$_SESSION['email']}') ) ORDER BY score DESC") or die('Error223');
                echo '<div class="panel title"><div class="table-responsive">
                <table class="table table-striped title1" >
                <tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Score</b></td></tr>';
                $c = 0;
                while ($row = mysqli_fetch_array($q)) {
                    $e = $row['email'];
                    $s = $row['score'];
                    $q12 = mysqli_query($con, "SELECT * FROM user WHERE email='$e' ") or die('Error231');
                    while ($row = mysqli_fetch_array($q12)) {
                        $name = $row['name'];
                        $gender = $row['gender'];
        
                    }
                    $c++;
                    echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name . '</td> <td>' . $s . '</td>';
                }
                echo '</table></div></div>';

?>


</body>
</html>



