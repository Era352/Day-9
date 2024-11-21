<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "another_db";

try{
    $connect = new PDO(dsn:"mysql:host=$server;dbname=$dbname", username:$username,password:$password);
    echo "Connected!!!";
}catch(Excpetion $e){
    echo "Something went wrong";
}
?>