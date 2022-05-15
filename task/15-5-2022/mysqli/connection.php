<?php 


$host = "localhost";
$user = "root";
$password = "";
$dbname = "mysqli";

$connection = mysqli_connect($host , $user , $password , $dbname);

$connectionOOP = new mysqli($host , $user , $password , $dbname);

if($connectionOOP == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

echo "Connect Successfully. Host info: " . mysqli_get_host_info($connectionOOP);