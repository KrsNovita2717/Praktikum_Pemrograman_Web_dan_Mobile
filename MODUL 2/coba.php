<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = true;

        if($user > 7){
            echo "<script> alert('Maaf username lebih dari 7 karakter')</script>";
            $x = false;
        }elseif(!preg_match("/[A-Za-z0-9]/", $password) 
                or !preg_match("/[^a-zA-Z\d]/",$password) 
                or $pass < 10){
            echo "<script> alert('Password anda tidak memenuhi syarat')</script>";
            $x = false;
        }else{
            echo "<script> alert('Berhasil')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .login-box {
            margin: auto;
            width: 400px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #aaaaaa;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 18px;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="password"] {
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #3e8e41;
        }
    </style>
    <body>
    <div class="login-box">
		<h1>Login</h1>
		<form action="" method="POST">
			<label for="username">Username:</label>
			<input type="text" name="username" placeholder="Nama max 7 karakter" required>

			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="abcDEF123@#$1 min 10 karakter" required>

			<button type="submit" name="login">Login</button>
		</form>
	</div>
    </body>
</html>