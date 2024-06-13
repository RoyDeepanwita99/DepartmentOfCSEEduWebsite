<?php

include "dbcont.php";

$id = $_GET['edit_id'];

$sql = "SELECT * FROM post where id='$id'";
$result = $conn->query($sql);
$arr = $result->fetch_assoc();
$id = $arr['id'];
$title = $arr['title'];
$body = $arr['body'];
$author = $arr['author'];
$tags = $arr['tags'];
$uid = $arr['u_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        form {
            width: 40%;
            border: 2px solid #0c3294;
            padding: 20px;
            background-color: #fff;
            color: #0c3294;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #0c3294;
            color: white;
        }

        input {
            width: calc(100% - 10px);
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #0c3294;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ffc107;
        }
    </style>
</head>
<body>
<center>
    <h1>Edit Data</h1>
    <form method="POST" action="update.php">
        <table>
            <tr>
                <th><label>ID</label></th>
                <td><input type="text" value=<?php echo $id ?> name="f_id" readonly></td>
            </tr>

            <tr>
                <th><label>Title</label></th>
                <td><input type="text" value=<?php echo $title ?> name="f_title"></td>
            </tr>

            <tr>
                <th><label>Description</label></th>
                <td><textarea name="f_dess" style="font-family:sans-serif;font-size:1.2em;">
                    <?php echo $body ?> 
                </textarea ></td>
               
            </tr>

            <tr>
                <th><label>Author</label></th>
                <td><input type="text" value=<?php echo $author ?> name="f_author"></td>
            </tr>

            <tr>
                <th><label>Tags</label></th>
                <td><input type="text" value=<?php echo $tags ?> name="f_tags"></td>
            </tr>

            <tr>
                <th><label>User ID</label></th>
                <td><input type="text" value=<?php echo $uid ?> name="f_uid"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="UPDATE">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
