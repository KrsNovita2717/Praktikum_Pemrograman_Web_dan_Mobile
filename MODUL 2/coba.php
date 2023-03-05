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
            echo "Berhasil";
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
        body{
            font-family:Georgia, 'Times New Roman', Times, serif;
            margin: 10px;   
        }
        li{
            list-style:none;
        }
        button{
            border-color:brown;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        p{
            color: red;
            opacity: 80%;
            font-size: small;
        }
    </style>
    <body>
        <p>
            Username tidak boleh lebih dari 7 karakter <br>
            Pastikan password anda memiliki:
            <br>Huruf Kapital
            <br>Huruf kecil
            <br>10 Karakter
            <br>Angka dan Karakter Khusus(@!&$)<br>
        </p>
        <form action="" method="POST">
            <ul>
                <li>
                    <label for="username">username</label>
                    <input type="text" name="username" id="username" required>
                </li>
                <li>
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" required>
                </li>
                <li>
                    <button type="submit">Submit</button>
                </li>
            </ul>
        </form>
    </body>
</html>