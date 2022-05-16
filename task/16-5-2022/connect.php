<?php

$serverName = "localhost";
$dbName = "category";
$user = "root";
$pass = "";


try{
    $dsn = "mysql:host=$serverName;dbname=$dbName";
    $connect = new PDO($dsn , $user , $pass);
}
catch(PDOException $e){
    die("connected fialed".$e->getMessage());
}
?>