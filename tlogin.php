<?php
include "dbcont.php";
session_start();

if (isset($_POST['login'])){
    $user = $_POST['f_user'];
    $pass = $_POST['f_pass'];

    $sql = "SELECT * FROM user WHERE username ='$user' AND pass='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $user;
        header('Location: registration.php');
    } else {
        echo "Please enter a valid ID and password...";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            width: 80%;
            max-width: 400px;
            border: 2px solid #0c3294;
            background-color: #1F618D;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: white;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #67f6e1;
            border: none;
            padding: 10px;
            border-radius: 10px;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0c3294;
            color: white;
        }
    </style>
</head>
<body>
    <center>
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <table>
                 <tr>
                    <th><label for="f_user">Username</label></th>
                    <td><input type="text" placeholder="Enter username" name="f_user" required></td>
                </tr>
              
                <tr>
                    <th><label for="f_pass">Password</label></th>
                    <td><input type="password" placeholder="Enter password" name="f_pass" required></td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" name="login" value="Login">
                    </th>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
