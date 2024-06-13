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

        margin-bottom: 20px;
        border: 1px solid #00ff6a;
        border-radius: 5px;
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
                <span class="logo">Data Structures</span>
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
                        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="2stindex.php?q=1"><span
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
            <h1 class="display-4">Data Structure [CSE-1201]</h1>
            <p class="lead">This course covers various topics including sorting algorithms, dynamic programming,
                greedy algorithm, hash table</p>
        </div>

        <div class="container">
            <div class="row">
                <!-- Topic: Introduction to 8-bit, 16-bit, and 32-bit microprocessors -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Sorting Algorithms</h2>
                            <p class="card-text" align="justify">  
                Sorting techniques in data structures is a process of rearranging data elements in an array or list in order to make it easier 
				to search and retrieve. By sorting in data structure, the complexity of searching for a particular item is reduced. For instance,
				searching the entire list would take too long if you have an unsorted list of 10 items. </p>
				<p>However, searching for an item would be 
				much faster if the same list is sorted. Various types of Sorting in data structure can also be used to compare two items and
				determine which one should come first in a sequence.
				</p>
				<h3 style="color:#10ac84;">Types of Sorting Techniques in Data Structure</h3>
				

               <p align="justify">Several sorting techniques in data structure  can be used to sort data elements in an array or list. The most common types of 
			   sorting in data structure are insertion sort, selection sort, bubble sort, quick sort, heap sort, and merge sort.</p>

              <h4 style="color:#10ac84;">Quick sort</h4>

               <p align="justify">Quick sort is a sorting algorithm using the divide and conquer approach. It works by selecting a pivot element from the array 
			   or list, then partitioning the elements around the pivot into two subsets. This reduces the size of each sub-set and makes it
			   easier to find the next pivot element. The process is repeated until all elements are sorted. </p>

               <h4 style="color:#10ac84;">Bubble Sort</h4> 

                 <p align="justify"> Bubble Sort is among the types of sorting in data structure algorithms that helps in comparing adjacent elements and swaps
				 them if and when they are in the wrong order. This process is repeated until all elements are sorted. </p>
				 
                  <h4 style="color:#10ac84;">Merge sort</h4>

                  <p align="justify">Merge sort is a sorting algorithm based on the divide and conquer approach. It works by splitting the array into two halves,
				  sorting in data structure each half in ascending or descending order, and then merging them. When this process is repeated for
				  each sub-array, the entire array becomes sorted. </p>
				  <h4 style="color:#10ac84;">Insertion Sort</h4>
				  
    

               <p align="justify">Insertion Sort is among the various types of sorting in data structure sorting algorithms that work by inserting each element 
			   of the array or list into its correct position. This sorting technique starts at the beginning of the array, takes the second element, 
			   and then compares it with the first element. If it is smaller than the first element, then they are swapped. The same process is 
			   repeated for all other elements until the array is sorted. </p>
			   <h4 style="color:#10ac84;">Heap sort</h4>
			   
    

             <p align="justify">Heapsort is a sorting in data structure algorithm based on the heap data structure. It works by creating a max or min heap from an unsorted array, 
           then removing the root element and placing it at the end of the sorted list.</p>
                
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Memory interface -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Dynamic Programming</h2>
                            <p class="card-text" align="justify">   
							Dynamic Programming is a technique in computer programming that helps to efficiently solve a class of problems that have 
							overlapping subproblems and optimal substructure property.</p>
							<p align="justify">Dynamic programming, like the divide-and-conquer method, solves problems by combining the solutions to subproblems. 

Divide-and-conquer algorithms partition the problem into disjoint subproblems, solve the subproblems recursively, and then combine their solutions to solve
the original problem. In contrast, dynamic programming applies when the subproblems overlap—that is, when subproblems share subsubproblems. In this context,
a divide-and-conquer algorithm does more work than necessary, repeatedly solving the common subsubproblems. A dynamic-programming algorithm solves each
subsubproblem just once and then saves its answer in a table, thereby avoiding the
work of recomputing the answer every time it solves each subsubproblem.</p><br>
					<p align="justify">If any problem can be divided into subproblems, which in turn are divided into smaller subproblems, and if there are overlapping 
					among these subproblems, then the solutions to these subproblems can be saved for future reference. In this way, efficiency of the 
					CPU can be enhanced. This method of solving a solution is referred to as dynamic programming.	</p>
					<p align="justify">We typically apply dynamic programming to optimization problems. Such problems can have many possible solutions.Each solution has a value, and we wish to
find a solution with the optimal (minimum or maximum) value. We call such a solution an optimal solution to the problem, as opposed to the optimal solution,
since there may be several solutions that achieve the optimal value.</p><br>
					<p align="justify">When developing a dynamic-programming algorithm, we follow a sequence of four steps:<br>
1. Characterize the structure of an optimal solution.<br>
2. Recursively define the value of an optimal solution.<br>
3. Compute the value of an optimal solution, typically in a bottom-up fashion.<br>
4. Construct an optimal solution from computed information.<br><br>
					<p align="justify">Such problems involve repeatedly calculating the value of the same subproblems to find the optimum solution.</p><br>
					<p align="justify">For example, if we write simple recursive solution for Fibonacci Numbers, we get exponential time complexity and if we optimize 
					it by storing solutions of subproblems, time complexity reduces to linear.</p>
					<p>Different Types of Dynamic Programming Algorithms</p>
					<p>1. Longest Common Subsequence</p>
                    <p>2. Floyd-Warshall Algorithm</p>

                
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
                            <h2 class="card-title">Greedy Algorithm</h2>
                            <p class="card-text" align="justify">   A greedy algorithm is an approach for solving a problem by selecting the best option available at
							the moment. It doesn't worry whether the current best result will bring the overall optimal result.</p>
							<p align="justify">The algorithm never reverses the earlier decision even if the choice is wrong. It works in a top-down approach.

                           This algorithm may not produce the best result for all the problems. It's because it always goes for the local best choice to
						   produce the global best result.</p>
						   <p align="justify">For example consider the Fractional Knapsack Problem. The local optimal strategy is to choose the item that has maximum value 
						   vs weight ratio. This strategy also leads to a globally optimal solution because we are allowed to take fractions of an item.</p>
						   <p align="justify">Examples of such greedy algorithms are Kruskal's algorithm and Prim's algorithm for finding minimum spanning trees and the algorithm
						   for finding optimum Huffman trees. Greedy algorithms appear in the network routing as well.</p>
                
                            <a href="#" class="btn btn-primary read-more">Read More...</a>
                        </div>
                    </div>
                </div>
                <!-- Topic: Arithmetic co-processor -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Hash Table</h2>
                            <p class="card-text" align="justify">  
                 Hash table is one of the most important data structures that uses a special function known as a hash function that maps a given value
				 with a key to access the elements faster.</p>	
                  <p align="justify">A Hash table is a data structure that stores some information, and the information has basically two main components, i.e., key 
				  and value. The hash table can be implemented with the help of an associative array. The efficiency of mapping depends upon the 
				  efficiency of the hash function used for mapping.</p>	
                    <p>For example, suppose the key value is John and the value is the phone number, so when we pass the key value in the hash function shown 
					as below:</p>
                    <p>Hash(key)= index;<br>

             When we pass the key in the hash function, then it gives the index.<br>

             Hash(john) = 3;<br>

             The above example adds the john at the index 3.</p>					
                
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

$tag = "CSE1201"; // Set the desired tag value ---> course
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
            
                $tag = 'CSE1201'; 
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