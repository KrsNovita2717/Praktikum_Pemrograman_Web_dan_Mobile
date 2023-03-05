<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = true;

        if(empty($_POST["username"]) or empty($_POST["password"])) {
            echo "Username atau password kosong, Silahkan input\n\n";
            $x = false;
        }elseif($user > 7){
            echo "Maaf username lebih dari 7 karakter";
            $x = false;
        }elseif(!preg_match("/[A-Za-z0-9]/", $password) 
                or !preg_match("/[^a-zA-Z\d]/",$password) 
                or $pass < 10){
            echo "Password anda tidak memenuhi syarat\n";
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
        <link rel="stylesheet" href="">
    </head>
    <style>
        body{
            font-family:Georgia, 'Times New Roman', Times, serif;
            margin: 10px 25%;
        }
        li{
            list-style:none;
        }
        button{
            border-color:brown;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <ul>
                <li>
                    <label for="username">username</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">password</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit">Submit</button>
                </li>
            </ul>
        </form>
    </body>
</html>