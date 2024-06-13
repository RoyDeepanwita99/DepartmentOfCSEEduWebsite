<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
            padding: 20px;
            background-color: #1F618D;
            border-radius: 15px;
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
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #0c3294;
            border: none;
            padding: 10px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ffc107;
        }
    </style>
	<title>comment</title>
</head>
<body>
    <center>

        <form method="POST" action="cinsert.php">
            
            <label for="f_user">username</label>
            <input type="text" placeholder="Enter username" name="f_user" required>
            <textarea name="f_cmnt" id="f_des" style="font-family:sans-serif;font-size:1.2em;">
                comment here....
            </textarea>
            <label for="c_id">Post_ID</label>
            <input type="text" placeholder="Enter post id" name="c_id" required>
            <button type="submit">Submit</button>
        </form>
    </center>
</body>
</html>