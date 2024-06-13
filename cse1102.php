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

        width: 500px;
            height: 300px;
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
                <span class="logo">Introduction to Computer Systems Lab</span>
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




                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="1stindex.php?q=1"><span
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
        <h1 class="display-4">Introduction To Computer Systems Lab [CSE-1102]</h1>
            <p class="lead"></p>
        </div>

        <div class="container">
            <div class="row">
                <!-- Topic: Introduction to 8-bit, 16-bit, and 32-bit microprocessors -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Why use an operating system?</h2>
                            <p class="card-text" align="justify">  An operating system (OS) is the program that, after being initially loaded into the computer by a boot program, manages all of the other application programs in a computer. The application programs make use of the operating system by making requests for services through a defined application program interface (API). In addition, users can interact directly with the operating system through a user interface, such as a command-line interface (CLI) or a graphical UI (GUI).

Why use an operating system?
An operating system brings powerful benefits to computer software and software development. Without an operating system, every application would need to include its own UI, as well as the comprehensive code needed to handle all low-level functionality of the underlying computer, such as disk storage, network interfaces and so on. Considering the vast array of underlying hardware available, this would vastly bloat the size of every application and make software development impractical.

Instead, many common tasks, such as sending a network packet or displaying text on a standard output device, such as a display, can be offloaded to system software that serves as an intermediary between the applications and the hardware. The system software provides a consistent and repeatable way for applications to interact with the hardware without the applications needing to know any details about the hardware.

As long as each application accesses the same resources and services in the same way, that system software -- the operating system -- can service almost any number of applications. This vastly reduces the amount of time and coding required to develop and debug an application, while ensuring that users can control, configure and manage the system hardware through a common and well-understood interface.</p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Memory interface -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">What Does Peripheral Device Mean?</h2>
                            <p class="card-text" align="justify">   A peripheral device is an internal or external device that connects directly to a computer or other digital device but does not contribute to the computer’s primary function, such as computing. It helps end users access and use the functionalities of a computer.

Since it’s not a core device for the system, the computer can still function without the peripheral, which simply provides extra functions. However, some peripherals such as a mouse, keyboard, or monitor tend to be pretty much fundamental to the interaction between the user and the computer itself.

A peripheral device is also called a peripheral, computer peripheral, input-output device, or I/O device</p>
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
                            <h2 class="card-title">Types of Printers</h2>
                            <p class="card-text">There’s a printer for just about every budget for the home, home office, or actual office. From low-cost inkjet photo printers to high-quality full-color laser printers to multifunctional all-in-ones, there’s a model that’s right for you. 

Before we dive into the various differences and uses for each popular type of printer, from common and affordable inkjet printers to all-in-one-printing and scanning devices, it’s important to ask what you want your printer to do for you.

Are you hoping to print archival photographs in a large format or do you use a printer more frequently for printing shipping labels and boarding passes? Do you want to create detailed 3D objects at home, or print purchase orders and receipts in a warehouse?

While many of the printers we’ll discuss can multitask for a range of common print jobs, others are much more specialized. 
Inkjet Printers
Laser
All-in-One
Supertank
Dye-Sublimation
Dot Matrix
3D</p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Arithmetic co-processor -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">What’s the difference between inkjet and laser printers?</h2>
                            <p class="card-text">  The big difference between laser printers and inkjet printers is ink. While laser printers use toner, inkjet printers essentially spray ink onto paper through a nozzle in microscopic droplets. There are two types of inkjet printers - Bubblejet and Inkjet - which use slightly different techniques to achieve the same effect. Inkjet printers can be relatively inexpensive in themselves. However, ink cartridges need to be replaced regularly and the cost can start to add up, especially if you make the mistake of choosing an inefficient inkjet printer. Laser printers on the other hand use toner cartridges which can print thousands of pages before needing to be replaced. For this reason, they are generally considered to be more economical. While the initial cost of a laser printer might be higher, you’re more likely to save money in the long term thanks to the lower cost of printing per page and faster print speeds</p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Topic: Microcontrollers -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">What is monitor and types of monitor</h2>
                            <p class="card-text">  A monitor is a type of screen on which we view a scene. The monitor is also called a visual unit. It's like watching television.

The monitor is classified into three parts based on its display colors.
Monochrome
Gray Scale
Colour Monitor

Monochrome: Monochrome is made up of two words. Mono means Single and Chrome means Color. This type of monitor displays the output as black and white.

Gray Scale: This monitor is a special type of monochrome monitor. Which displays the output in various gray shades. Gray-scale monitors are mostly used in hospitals such as X-rays, this monitor is used a lot.

Colour Monitor: Color monitors are used to display graphics in high resolution. These monitors display the output of the RGB variants. All colors are made by mixing RGB color.
            </p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Integrating microprocessor with interfacing chips -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">CRT Monitor:</h2>
                            <p class="card-text">
                            Most monitors have a picture tube element that is similar to a TV set. This is called tube CRT. CRT technology is cheap and capable of delivering good color output. CRT monitor works on the principle of raster graphics A monochrome monitor emits an electron beam towards its flat surface. The inner phase of the surface consists of phosphorus coating on the surface, which emits light by high-speed electron collisions. Each pixel shines with an electron beam. Electron beam pixels activate the entire screen in Z shape. This z-shaped motion of the electron beam is called a raster.  when a pixel is momentarily flashed and is inactive, Then it's called refresh.
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

  
$tag = "CSE1102"; // Set the desired tag value ---> course
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
                $tag = 'CSE1102'; 
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