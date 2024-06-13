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

        /* Post styles */
        .post {
            background-color: white;
            padding: 20px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        .post h2 {
            color: #0c3294;
        }

        .post img {
            border-radius: 8px;
            width: 60%;
            height: auto;
            margin-bottom: 20px;
        }

        .post h4 {
            color: #555;
        }

        .post p {
            color: #333;
            line-height: 1.6;
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

    <!-- Include the Google Icons library -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

    <!-- Your existing scripts here... -->
</head>

<body>

    <?php
    include "dbcont.php";

    $id = $_GET['pid'];

    $sql = "SELECT * FROM post where id='$id'";
    $result = $conn->query($sql);

    while ($r = $result->fetch_assoc()) {
        $post_id = $r['id'];

    ?>
        <div class="post">
            <h2><?php echo $r['title']; ?></h2>
            <img src="upload/<?php echo $r['image']; ?>" alt="Post Image">
            <h4><?php echo $r['date']; ?>, By <?php echo $r['author']; ?></h4>
            <p><?php echo nl2br($r['body']); ?></p>
        </div>
    <?php } ?>

   

</body>

</html>
