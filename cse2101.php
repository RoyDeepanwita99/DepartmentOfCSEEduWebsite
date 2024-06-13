<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Worlds || TEST YOUR SKILL </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <!--alert message-->
    <?php if(@$_GET['w']) { echo '<script>alert("'.@$_GET['w'].'");</script>'; } ?>

    <style>
    body {
        background-color: #f8f9fa;
    }

    .jumbotron {
        background-color: #000080;
        color: white;
    }

    .card {
            background-color: #f0f0f0; /* Light gray background color */
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            margin: 20px;
            padding: 20px;

    }

    .card-title {
    color: #000080; 
    
}


    .card-text {
        height: 100px;
        overflow: hidden;
    }

    .card-text.expanded {
        height: auto;
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
                <span class="logo">Database Management Systems</span>
            </div>
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
        </div>
    </div>
    <div class="bg">

        <!--navigation menu-->
        <nav class="navbar navbar-default title1">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->







                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                   <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="3stindex.php?q=1"><span
                                    class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span
                                    class="sr-only">(current)</span></a></li>
                        <li><a data-toggle="modal" href="#his"><span class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></span>&nbsp;History</a>
                        </li>
                        <li><a data-toggle="modal" href="#rank"><span class="glyphicon glyphicon-stats"
                                    aria-hidden="true"></span>&nbsp;Ranking</a>
                        </li>
                        <li><a data-toggle="modal" href="#qz"><span class="glyphicon glyphicon-search"
                                    aria-hidden="true"></span>&nbsp;Quiz</a>
                        </li>
                    </ul>

                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--navigation menu closed-->
        <div class="jumbotron text-center">
            <h1 class="display-4">Database Management Systems [CSE-2101]</h1>
            <p class="lead">This course covers various topics including basic DBMS concepts, entity relationship model,
                normalization,transaction.</p>
        </div>

        <div class="container">
            <div class="row">
                <!-- Topic: Introduction to 8-bit, 16-bit, and 32-bit microprocessors -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Basic DBMS Concepts</h2>
                            <p class="card-text" align="justify">   Database is a collection of related data and data is a collection of facts and figures that can be 
processed to produce information.<br>
Mostly data represents recordable facts. Data aids in producing information, which is based on 
facts. For example, if we have data about marks obtained by all students, we can then conclude 
about toppers and average marks.<br>
A database management system stores data in such a way that it becomes easier to retrieve, 
manipulate, and produce information.<br>
A DBMS is a software that allows creation, definition and manipulation of database. Dbms is 
actually a tool used to perform any kind of operation on data in database. Dbms also provides 
protection and security to database. It maintains data consistency in case of multiple users. Here 
are some examples of popular dbms, MySql, Oracle, Sybase, Microsoft Access and IBM DB2 
etc.<br>

                </p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Memory interface -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Entity Relationship Model</h2>
                            <p class="card-text" align="justify">   The Entity Relational Model is a model for identifying entities to be represented in the database and representation of how those entities are related. 
							The ER data model specifies enterprise schema that represents the overall logical structure of a database graphically. <br>

The Entity Relationship Diagram explains the relationship among the entities present in the database. ER models are used to model
 real-world objects like a person, a car, or a company and the relation between these real-world objects. In short, the ER Diagram is the structural 
 format of the database. 
                </p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Topic: Bus interface -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Normalization</h2>
                            <p class="card-text" align="justify">   Normalization is the process of minimizing redundancy from a relation or set of relations. Redundancy 
							in relation may cause insertion, deletion, and update anomalies. So, it helps to minimize the redundancy in relations. Normal 
							forms are used to eliminate or reduce redundancy in database tables.<br>
							Normalization of DBMS:<br>
							In database management systems (DBMS), normal forms are a series of guidelines that help to ensure that the design of a database 
							is efficient, organized, and free from data anomalies. There are several levels of normalization, each with its own set of 
							guidelines, known as normal forms.<br>
							
                </p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Arithmetic co-processor -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Transaction</h2>
                            <p class="card-text" align="justify">  A Transaction is a logical unit of work.It is the set of operations( basically read and 
write) to perform unit of work,( include small 
units of work). Transaction which successfully completes its execution is said to have been committed,otherwise the transaction is aborted or 
rollback.<br>
Let’s take an example of a simple transaction. Suppose a bank employee transfers Rs 500 from A's account to B's account. 
This very simple and small transaction involves several low-level tasks.<br>
A’s Account:<br>

Open_Account(A)<br>
Old_Balance = A.balance<br>
New_Balance = Old_Balance - 500<br>
A.balance = New_Balance<br>
Close_Account(A)<br><br>
B’s Account:<br>

Open_Account(B)<br>
Old_Balance = B.balance<br>
New_Balance = Old_Balance + 500<br>
B.balance = New_Balance<br>
Close_Account(B)<br>
<br>
ACID Properties:<br>
A transaction is a very small unit of a program and it may contain several lowlevel tasks. A transaction in a database system must maintain Atomicity,
 Consistency, Isolation, and Durability − commonly known as ACID properties − in order to ensure accuracy, completeness, and data integrity.<br>

                </p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>

            
                            
                            
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
        // Toggle expanded class on card text when "Read More..." is clicked
        $('.read-more').click(function(e) {
            e.preventDefault();
            $(this).prev('.card-text').toggleClass('expanded');
            if ($(this).prev('.card-text').hasClass('expanded')) {
                $(this).text('Read Less');
            } else {
                $(this).text('Read More...');
            }
        });
        </script>

    </div>




    <div class="modal fade" id="qz">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">Quiz</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">

                    <?php
$tag = "CSE2101"; // Set the desired tag value ---> course
$tag = mysqli_real_escape_string($con, $tag); // Sanitize the input to prevent SQL injection

$result = mysqli_query($con, "SELECT * FROM quiz WHERE tag='$tag' ORDER BY date DESC") or die('Error');

echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
  $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td></tr>';
}
else
{
echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></td></tr>';
}
}
$c=0;
echo '</table></div></div>';

?>


                </div>
            </div>
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
                $tag = 'CSE2101'; 
                $q = mysqli_query($con, "SELECT * FROM rank WHERE email IN (SELECT email FROM history WHERE eid IN (SELECT eid FROM quiz WHERE tag = '$tag') ) ORDER BY score DESC") or die('Error223');
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
                        $college = $row['college'];
                    }
                    $c++;
                    echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name . '</td><td>' . $s . '</td>';
                }
                echo '</table></div></div>';

?>


    </div>
    </div>
    </div>
    </div>



</body>

</html>