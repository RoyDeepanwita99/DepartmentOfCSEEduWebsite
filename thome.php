<?php
session_start();
error_reporting(0);
include "dbcont.php";
$user = $_SESSION['username'];
if (!$user) {
    header('Location: login.php');
}
$sql = "SELECT * FROM post";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Homepage</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #2980b9;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #3498db;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .post {
            background-color: white;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .post h2 {
            color: #3498db;
        }

        .post h4 {
            color: #666;
        }

        .post p {
            color: #444;
        }

        .post a {
            display: block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .post a:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    
    <section>
        <?php 
             while ($r = $result->fetch_assoc()) 
             { 
                $post_id=$r['id'];

        ?>
            <div class="post">
                
                <h2><?php echo $r['id']; ?></h2>
                <h2><?php echo $r['title']; ?></h2>
                <img style="border-radius: 20px;" src="upload/<?php echo $r['image']; ?>" height="100" width="150" >
                <h4><?php echo $r['date']; ?>, By <?php echo $r['author']; ?></h4>
                <!--<img src="upload/<?php echo $r['image']; ?>" alt="Post Image" style="border-radius: 8px; max-width: 100%;">-->
                <p><?php echo substr($r['body'],0,100) ; ?></p>
                <a href="#">Read More</a>
                 <?php 
                     $sql1 = "SELECT * FROM comment1 WHERE cmnt_id ='$post_id'";
                     $result1 = $conn->query($sql1);
                     while ($r1 = $result1->fetch_assoc()) 
                      { 
                 ?>
                     <small><?php echo $r1['username'];?>
                     <?php echo ": "?>
                     <?php echo $r1['cmnt'];?></small><br>
                 <?php } ?>

                <a href="comment.php">Comment here</a>
            </div>
    <?php } ?>
    </section>
</body>

</html>
