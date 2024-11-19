<?php
$username = $_GET['username'];
$password=$_GET['passowrd'];
echo "<br>";
echo $username;
echo "<br>";
echo $password;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "">
        <label for ="username"> Username</label>
        <input type = "text" name = "username" id = "username" placehoder = "Username"> </input> <br>
        <label for = "password"> Password</label>
        <input type ="password" name = "Password" id = "Password" placehoder = "Passowrd" > </input>
        <input type = "submit" value = "Submit"> </input>
    </form>
</body>
</html>