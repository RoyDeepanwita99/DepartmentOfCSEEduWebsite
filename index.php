

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Department of Computer Science & Engineering</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<?php
session_start(); // Start the session

?>
    <script>
    function validateForm() {
        var y = document.forms["form"]["name"].value;
        var letters = /^[A-Za-z]+$/;
        if (y == null || y == "") {
            alert("Name must be filled out.");
            return false;
        }
        var z = document.forms["form"]["college"].value;
        if (z == null || z == "") {
            alert("college must be filled out.");
            return false;
        }
        var x = document.forms["form"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
            alert("Not a valid e-mail address.");
            return false;
        }
        var a = document.forms["form"]["password"].value;
        if (a == null || a == "") {
            alert("Password must be filled out");
            return false;
        }
        if (a.length < 5 || a.length > 25) {
            alert("Passwords must be 5 to 25 characters long.");
            return false;
        }
        var b = document.forms["form"]["cpassword"].value;
        if (a != b) {
            alert("Passwords must match.");
            return false;
        }
    }
    </script>

<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h3 {
            font-size: 28px;
            color: #007bff;
        }
        h4 {
            font-size: 24px;
            color: #17a2b8;
        }
        h5 {
            font-size: 20px;
            color: #28a745;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
            h3 {
                font-size: 24px;
            }
            h4 {
                font-size: 20px;
            }
            h5 {
                font-size: 18px;
            }
            p {
                font-size: 16px;
            }
        }
    ul {
        margin-top: 10px;
    }

    ul li {
        margin-bottom: 10px;
    }

    /* Dropdown container */
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
    /* CSS Document */

marquee {
	margin-top: 5px;
	width: 100%;
}

.runtext-container {
background-color:white;


background-repeat:repeat-x;
	

width: 850px;
overflow-x: hidden;
overflow-y: visible;
margin: 0 60px 0 30px;
padding:0 3px 0 3px;
}

.main-runtext {margin: 0 auto;
overflow: visible;
position: relative;
height: 40px;
}

.runtext-container .holder {
position: relative;
overflow: visible;
display:inline;
float:left;

}

.runtext-container .holder .text-container {
	display:inline;
}

.runtext-container .holder a{
	text-decoration: none;
	font-weight: bold;
	color:#ff0000;
	text-shadow:0 -1px 0 rgba(0,0,0,0.25);
	line-height: -0.5em;
	font-size:16px;
}

.runtext-container .holder a:hover{
	text-decoration: none;
	color:#6600ff;
}
    </style>
</head>

<body>

    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">Department of CSE</span>
            </div>
            <?php
if(isset($_SESSION['email'])){
    // If logged in, show logout button
    echo '<a href="logout.php" class="pull-right btn sub1">
            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Logout</b></span>
          </a>';
} 
else {
           echo '<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span
                    class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span
                    class="title1"><b>Signin</b></span></a>';
}
?>
            <!--sign in modal start-->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content title1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                <fieldset>


                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email"></label>
                                        <div class="col-md-6">
                                            <input id="email" name="email" placeholder="Enter your email-id"
                                                class="form-control input-md" type="email">

                                        </div>

                                    </div>
                                    <!-- Password input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="password"></label>
                                        <div class="col-md-6">
                                            <input id="password" name="password" placeholder="Enter your Password"
                                                class="form-control input-md" type="password">
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Log in</button>
                                </fieldset>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!--sign in modal closed-->


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
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li> <a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <!-- Add this code inside the ul element to create a dropdown menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    Semester
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="1stindex.php?q=1">1st Semester</a></li>
                                    <li><a href="2stindex.php?q=1">2nd Semester</a></li>
                                    <li><a href="3stindex.php?q=1">3rd Semester</a></li>
                                    <li><a href="4stindex.php?q=1">4th Semester</a></li>
                                    <li><a href="5stindex.php?q=1">5th Semester</a></li>
                                    <li><a href="#">6th Semester</a></li>
                                    <li><a href="#">7th Semester</a></li>
                                    <li><a href="#">8th Semester</a></li>
                                </ul>
                            </li>

                            </li>
                            <li> <a href="treg.php">Sign Up</a></li>


                        </ul>
                    </div>
                </div>
            </nav>




            <div class="runtext-container">
<div class="main-runtext">
<marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">

<div class="holder">

     <div class="text-container">
   &nbsp; &nbsp; <img src="http://jamaicaelectrician.org/images/icon.png"> &nbsp; <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/Electric_Lighting_Act.jpg" title="THE ELECTRIC LIGHTING ACT: section 35">Welcome to the official educational website of the Computer Science and Engineering (CSE) Department at the University of Barisal.</a>
    </div>
	
    
    
</div>

</marquee>
</div>
</div>





            <!--<div class="container"> -->
            
                <img src="d2.jpg" width="1500px" height="500px">
        <h3>Exploring the University of Barisal CSE Department: Your Gateway to Digital Excellence</h3>
        
        <!--<h4>Introduction:</h4> -->
        <p>Welcome to the official educational website of the Computer Science and Engineering (CSE) Department at the University of Barisal. Here, we invite you to embark on a transformative journey into the realms of technology and innovation. Our website serves as a comprehensive digital platform, designed to empower aspiring computer scientists and engineers with knowledge, skills, and opportunities.</p>
        
        <div style="width: 48%; border: 1px solid #333; padding: 10px; margin: 10px; background-color: #f0f0f0; float: left;">
        <h4 style="font-size: 18px;">Overview:</h4>
        <p style="font-size: 14px;">At the heart of our educational website lies a rich tapestry of resources and information tailored to meet the diverse needs of students, faculty, and prospective learners. Immerse yourself in a user-friendly interface that seamlessly navigates through the myriad of academic offerings, research initiatives, and student-centric programs that define our esteemed CSE department.</p>
    </div>

    <div style="width: 48%; border: 1px solid #333; padding: 10px; margin: 10px; background-color: #f0f0f0; float: left;">
        <h4 style="font-size: 18px;">Key Features:</h4>

        <h5 style="font-size: 16px;">Programs and Courses:</h5>
        <p style="font-size: 14px;">Explore our cutting-edge undergraduate and postgraduate programs, meticulously crafted to align with the evolving demands of the tech industry. Detailed course descriptions, curriculum outlines, and faculty profiles provide valuable insights into the educational landscape.</p>

        <h5 style="font-size: 16px;">Faculty Expertise:</h5>
        <p style="font-size: 14px;">Meet our esteemed faculty members, distinguished experts who are dedicated to nurturing talent and fostering a culture of academic excellence. Discover their research interests, publications, and contributions to the field, showcasing the depth of knowledge within the department.</p>

        <h5 style="font-size: 16px;">Research and Innovation:</h5>
        <p style="font-size: 14px;">Delve into our research centers, laboratories, and ongoing projects, where innovation meets real-world challenges. Stay updated with the latest advancements, breakthroughs, and publications emerging from the vibrant research community at the University of Barisal.</p>

        <h5 style="font-size: 16px;">Student Resources:</h5>
        <p style="font-size: 14px;">Access a plethora of resources tailored for students, including academic calendars, examination schedules, study materials, and career guidance. Stay informed about extracurricular activities, student clubs, and events that enrich the university experience.</p>

        <h5 style="font-size: 16px;">Industry Collaboration:</h5>
        <p style="font-size: 14px;">Learn about our collaborations with leading industries, creating avenues for internships, industrial training, and placement opportunities. Discover success stories of alumni who have excelled in their careers, serving as inspiring examples for aspiring professionals.</p>

        <h5 style="font-size: 16px;">Community Engagement:</h5>
        <p style="font-size: 14px;">Engage with our outreach programs, where the expertise of our faculty and students is utilized to address societal challenges. Explore initiatives related to digital literacy, community development, and technology-driven solutions for local and global issues.</p>

        <h5 style="font-size: 16px;">Admissions and Scholarships:</h5>
        <p style="font-size: 14px;">Find detailed information about the admission process, eligibility criteria, and scholarship opportunities. Gain insights into the application deadlines, entrance exams, and other essential aspects of joining our academic community.</p>
    </div>

    <div style="clear: both;"></div> <!-- Add a clearing element to ensure the content below doesn't float beside the boxes -->


        <!--<h4>Conclusion:</h4>
        <p>The University of Barisal CSE Department's educational website is not just a virtual portal; it is a gateway to unlimited possibilities. Whether you are a prospective student, a current learner, or an enthusiast seeking knowledge, our website is your passport to a world where innovation, education, and technology converge. Join us in shaping the future of computer science and engineering, where dreams take flight, and brilliance knows no bounds.</p>
    
-->
        </div>
        <br>
        <br>
        <br>
        <!--Footer start-->
        <div class="row footer">
            <div class="col-md-3 box">
            </div>
            <div class="col-md-3 box">
                <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
            </div>
            <div class="col-md-3 box">
                <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
            </div>
        </div>
    </div>
    <!-- Modal For Developers-->
    <div class="modal fade title1" id="developers">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span>
                    </h4>
                </div>

                <div class="modal-body">
                    <p>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/MHD.jpg" width=110 height=111 alt="mehedi hasan" class="img-rounded">
                        </div>
                        <div class="col-md-5">
                            <a href="https://www.facebook.com/mehedi.osmany"
                                style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Md.
                                Mehedi Hasan</a>
                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+880 1953613643
                            </h4>
                            <h4 style="font-family:'typo' ">mehedihasancse20@gmail.com</h4>
                            <h4 style="font-family:'typo' ">University of Barishal.</h4>
                        </div>
                    </div>
                    </p>
                </div>

                <div class="modal-body">
                    <p>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/roy.jpg" width=110 height=111 alt="Deepanwita" class="img-rounded">
                        </div>
                        <div class="col-md-5">
                            <a href="https://www.facebook.com/disha.roy.5832343"
                                style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">
                                Deepanwita Roy</a>
                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+880 1918840003
                            </h4>
                            <h4 style="font-family:'typo' ">deepanwita.cse7.bu@gmail.com</h4>
                            <h4 style="font-family:'typo' ">University of Barishal.</h4>
                        </div>
                    </div>
                    </p>
                </div>

                <div class="modal-body">
                    <p>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="" width=110 height=111 alt="Shefa" class="img-rounded">
                        </div>
                        <div class="col-md-5">
                            <a href="https://www.facebook.com/disha.roy.5832343"
                                style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">
                                Nure Hafsa Shefa</a>
                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+880 19184266
                            </h4>
                            <h4 style="font-family:'typo' ">Shefa.cse7.bu@gmail.com</h4>
                            <h4 style="font-family:'typo' ">University of Barishal.</h4>
                        </div>
                    </div>
                    </p>
                </div>

                <div class="modal-body">
                    <p>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="" width=110 height=111 alt="moli" class="img-rounded">
                        </div>
                        <div class="col-md-5">
                            <a href="https://www.facebook.com/disha.roy.5832343"
                                style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">
                                Jannatul Ferdous</a>
                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+880 1913425256
                            </h4>
                            <h4 style="font-family:'typo' ">JAnnatul.cse7.bu@@gmail.com</h4>
                            <h4 style="font-family:'typo' ">University of Barishal.</h4>
                        </div>
                    </div>
                    </p>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Modal for admin login-->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Admin user id"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password"
                                        class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--footer end-->


</body>

</html>