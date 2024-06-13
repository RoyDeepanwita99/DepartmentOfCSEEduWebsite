<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
        }

        /* Header styles */
        header {
            height: 125px; /* Reduced height */
            background-color: #113030; /* Change this color to your desired background color */
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative; /* Added position relative for positioning child elements */
        }

        header img {
            border-radius: 10%;
            width: 100px; /* Adjusted logo size */
            height: 100px;
            /*border: 5px solid white;*/
            position: absolute; /* Positioned logo absolutely */
            left: 20px; /* Adjusted left position */
            top: 50%; /* Positioned at the vertical center */
            transform: translateY(-50%);
        }

        header h1 {
            margin: 5px 0;
            font-size: 2em;
        }

        header h3 {
            color: #ffc107;
            font-size: 1.5em;
        }
       
        /* Navbar styles */
        
   
        .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  margin-left:110px;
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

        /*side nav*/


        /* Style the links inside the sidenav */
       
        /* The about link: 20px from the top with a green background */
        #about {
            top: 0px;
            background-color: #04AA6D;
        }

        #blog {
            top: 60px;
            background-color: #2196F3; /* Blue */
        }

        #contact {
            top: 120px;
            background-color: #f44336; /* Light Black */
        }

        /* Image slider styles */
        .container-and-slider {
            display: flex;
        }

.dropdown {
  margin-left:110px;
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    margin-left:0px;
    margin-right:10px;
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
        .img-slider {
            max-width: 55%;
            overflow: hidden;
            position: relative;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            height: auto;
            border-radius: 8px; /* Optional: Add rounded corners */
        }

        /* Container styles */

        .container {
            text-align: center;
            padding: 20px;
            max-width: 50%;
        }

        /* Post and Sidebar styles */
        .post{
            width: 60%;
        }

        .post,
        .sidebar {
            background-color: white;
            padding: 20px;
            margin: 20px 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex-grow: 1; /* Allow post and sidebar to grow and occupy available space */
        }

        .post h2,
        .sidebar h2 {
            color: #0c3294;
        }

        .post p,
        .sidebar ul {
            color: #333;
            list-style: none;
            padding: 0;
        }

        .post a,
        .sidebar a {
            color: #ffc107;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .post a:hover,
        .sidebar a:hover {
            color: #0c3294;
        }

        /* Footer styles */
        .footer {
            background-color: #212F3C;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
  
</head>
<body>

<header>
    <div class="head">
        <img src="../../../../upload/logo2.png" height="100" width="100" alt="Logo">
        <h1>Explore Mind</h1>
        <h3>A Platform To Share</h3>
    </div>
</header>

<!-- New navbar -->
<div class="navbar">
    <a href="#">Home</a>
    <a href="#">Resources</a>
    <a href="#">Teacher</a>
    <a href="#">Quiz</a>
 </div>



<!-- Image slider and container side by side -->
<div class="container-and-slider">
 

    <div class="container">
        <h1>Welcome To My Blog</h1>
        <p>
            
       <b> Course Code: CSE-1101</b><br><br>
       <b> Credit Hours: 3 Credit, 45 Hours</b><br><br>
       <b> Syllabus:</b><br><br>
        Introduction to computations; Early history of computing devices, Computers, Major components of a computer; Hardware: processor, memory, I/O devices, Software: Operating system, application software; Basic architecture of a computer; Basic Information Technology; The Internet; Number system: binary, octal, hexadecimal, binary arithmetic; Basic programming concepts; Program development stages: flow charts; Programming constructs: data types, operators, expressions, statements, control statements, functions, array. </p>
    </div>
</div>

<!-- Post and Sidebar side by side at the bottom -->


<footer class="footer">
    <p>&copy; 2023 Zahidul Islam Roni. All rights reserved.</p>
</footer>

</body>
</html>
