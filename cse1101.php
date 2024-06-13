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
                <span class="logo">Introduction to Computer Systems</span>
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
            <h1 class="display-4">Introduction To Computer Systems [CSE-1101]</h1>
            <p class="lead">   </p>
        </div>

        <div class="container">
            <div class="row">
                <!-- Topic: Introduction to 8-bit, 16-bit, and 32-bit microprocessors -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">What are internal computer hardware components?</h2>
                            <p class="card-text" align="justify">  
                 Internal components collectively process or store the instructions delivered by the program or operating system (OS). These include the following:

Motherboard. This is a printed circuit board that holds the central processing unit (CPU) and other essential internal hardware and functions as the central hub that all other hardware components run through.
CPU. The CPU is the brain of the computer that processes and executes digital instructions from various programs; its clock speed determines the computer's performance and efficiency in processing data.
RAM. RAM -- or dynamic RAM -- is temporary memory storage that makes information immediately accessible to programs; RAM is volatile memory, so stored data is cleared when the computer powers off.
Hard drive. Hard disk drives are physical storage devices that store both permanent and temporary data in different formats, including programs, OSes, device files, photos, etc.
Solid-state drive (SSD). SSDs are solid-state storage devices based on NAND flash memory technology; SSDs are non-volatile, so they can safely store data even when the computer is powered down.
Optical drive. Optical drives typically reside in an on-device drive bay; they enable the computer to read and interact with nonmagnetic external media, such as compact disc read-only memory or digital video discs.
Heat sink. This is a passive piece of hardware that draws heat away from components to regulate/reduce their temperature to help ensure they continue to function properly. Typically, a heat sink is installed directly atop the CPU, which produces the most heat among internal components.
Graphics processing unit. This chip-based device processes graphical data and often functions as an extension to the main CPU.
Network interface card (NIC). A NIC is a circuit board or chip that enables the computer to connect to a network; also known as a network adapter or local area network adapter, it typically supports connection to an Ethernet network.
Other computing components, such as USB ports, power supplies, transistors and chips, are also types of internal hardware.

This computer hardware chart below illustrates what typical internal computer hardware components look like.
                </p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Memory interface -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">What are external hardware components?</h2>
                            <p class="card-text" align="justify">  External hardware components, also called peripheral components, are those items that are often externally connected to the computer to control either input or output functions. These hardware devices are designed to either provide instructions to the software (input) or render results from its execution (output).

Common input hardware components include the following:

Mouse. A mouse is a hand-held pointing device that moves a cursor around a computer screen and enables interaction with objects on the screen. It may be wired or wireless.
Keyboard. A keyboard is an input device featuring a standard QWERTY keyset that enables users to input text, numbers or special characters.
Microphone. A microphone is a device that translates sound waves into electrical signals and supports computer-based audio communications.
Camera. A camera captures visual images and streams them to the computer or through a computer to a network device.
Touchpad. A touchpad is an input device, external or built into a laptop, used to control the pointer on a display screen. It is typically an alternative to an external mouse.
USB flash drive. A USB flash drive is an external, removable storage device that uses flash memory and interfaces with a computer through a USB port.
Memory card. A memory card is a type of portable external storage media, such as a CompactFlash card, used to store media or data files.
Other input hardware components include joysticks, styluses and scanners.

Examples of output hardware components include the following:

Monitor. A monitor is an output device similar to a TV screen that displays information, documents or images generated by the computing device.
Printer. Printers render electronic data from a computer into printed material.
Speaker. A speaker is an external audio output device that connects to a computer to generate a sound output.
Headphones, earphones, earbuds. Similar to speakers, these devices provide audio output that's audible only to a single listener.</p>
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
                            <h2 class="card-title">Hardware vs. software</h2>
                            <p class="card-text"> Hardware refers to the computer's tangible components or delivery systems that store and run the written instructions provided by the software. The software is the intangible part of the device that lets the user interact with the hardware and command it to perform specific tasks. Computer software includes the following:

OS and related utilities;
programs that control certain computer functions; and
applications that usually perform operations on user-supplied data.
On mobile devices and laptop computers, virtual keyboards are also considered software because they're not physical.

Since the software and hardware depend on each other to enable a computer to produce useful output, the software must be designed to work properly with the hardware.

The presence of malicious software, or malware, such as viruses, Trojan horses, spyware and worms, can have a huge effect on computer programs and a system's OS. Hardware is not affected by malware, though.

However, malware can affect the system in other ways. For example, it can consume a large portion of the computer's memory or even replicate itself to fill the device's hard drive. This slows down the computer and may also prevent legitimate programs from running. Malware can also prevent users from accessing the files in the computer's hardware storage.</p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Arithmetic co-processor -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">What is hardware virtualization?</h2>
                            <p class="card-text">   Hardware virtualization is the abstraction of physical computing resources from the software that uses those resources. Simply put, when software is used to create virtual versions of hardware instead of using physical, tangible hardware components for some computing function, it is known as hardware virtualization.

Sometimes referred to as platform or server virtualization, hardware virtualization is executed on a particular hardware platform by host software. It requires a virtual machine manager called a hypervisor that creates virtual versions of internal hardware. This enables the hardware resources of one physical machine to be shared among OSes and applications and to be used more efficiently.In cloud computing, hardware virtualization is often associated with infrastructure as a service (IaaS), a delivery model that provides hardware resources over high-speed internet. A cloud service provider (CSP), such as Amazon Web Services or Microsoft Azure, hosts all the hardware components that are traditionally present in an on-premises data center, including servers, storage and networking hardware, as well the software that makes virtualization possible.

This makes IaaS and CSPs different from hardware as a service (HaaS) provider that hosts only hardware but not software. Typically, an IaaS provider also supplies a range of services to accompany infrastructure components, such as the following:

billing
monitoring
log access
security
load balancing
clustering
Some CSPs also provide storage resiliency services, such as automated backup, replication and disaster recovery.</p>
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
                            <h2 class="card-title">Basic Terms Related to Computers</h2>
                            <p class="card-text">   The basic terms related to generations of computers are listed below.

Vacuum Tube: Vacuum tubes have the functionality of controlling the flow of electronics in a vacuum. Generally, it is used in switches, amplifiers, radios, televisions, etc.
Transistor: A transistor helps in controlling the flow of electricity in devices, it works as an amplifier or a switch.
Integrated Circuit (IC): Integrated circuits are silicon chips that contain their circuit elements like transistors, resistors, etc.
Microprocessors: Microprocessors are the components that contain the CPU and its circuits and are present in the Integrated Circuit.
Central Processing Unit (CPU): The CPU is called the brain of the computer. CPU performs processing and operations work.
Magnetic Drum: Magnetic Drum is like a cylinder that stores data and cylinder.
Magnetic Core: Magnetic cores are used to store information. These are arrays of small rings.
Machine Language: Machine Language is the language that a computer accepts (in the form of binary digits). It is also called low-level programming language.
Memory: Memory is used to store data, information, and program in a computer.
Artificial Intelligence: Artificial Intelligence deals with creating intelligent machines and behaviors.
            </p>
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Integrating microprocessor with interfacing chips -->
                <div class="col-md-6"> 
                    <div class="card"> 
                        <div class="card-body">
                            <h2 class="card-title">First to Fifth Generations of Computer</h2>
                            <p class="card-text">
                            Computers are essential devices that you must have used while growing up. There are also pretty good chances that you still use a computer daily. Have you ever wondered what a computer really is? Do you know what the generation of computers is?


If you are curious to know the answer to these questions, that is great. In this article, we will answer both of these questions in great detail.


Let’s first begin with what the meaning of computers is. According to experts, a computer can be defined as an electronic device used for manipulating information or data. Computers also have the ability to store, retrieve and process information.

These days, people use computers for typing documents, playing games, sending emails and browsing the internet. One can also use these devices to create or edit presentations, spreadsheets and videos.


You might also be interested to know that the evolution of computers began sometime during the 1940s. At that time, the first generation of computers was created. Since then, experts have also developed other generations of computers. As of now, there are five generations of computers.


In the field of electronics and technology, generation is computer terminology. This term refers to the change that a computer goes through. Earlier, the term generation was used to differentiate between different hardware technologies. However, these days, generation can be used to refer to both software and hardware; these together form the entire computer system.


In the rest of the article, we will discuss these five computer generations. Before we jump on to the details, it is important to go through an overview of these generations. 
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

$tag = "CSE1101"; // Set the desired tag value ---> course
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
                $tag = 'CSE1101'; 
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