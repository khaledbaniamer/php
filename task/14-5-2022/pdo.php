<?php

$dsn = "mysql:host =localhost ; dbname=pdotest";
$user = "root";
$password = "";

try{
    $link = new PDO($dsn , $user , $password);
}catch(PDOException $e){
    die($e->getMessage());
}

// try{
//     $sql = "CREATE TABLE persons (
//         id INT PRIMARY KEY ,
//         fname VARCHAR (100) NOT NULL ,
//         lname VARCHAR (100) ,
//         email VARCHAR (100) UNIQUE NOT NULL

//     );";
//     $link->exec($sql);
//     echo "table created successfully";
// }catch(PDOException $e){
//     die("ERROR: Could not able to execute $sql. " . $e->getMessage());
// }

// try{

//     $insert = "INSERT INTO persons (fname , lname , email) VALUES ('khaled' , 'bani amer' , 'khaled@mail.com')";
//     $link->exec($insert);
//     echo "Records inserts successfully";
// }catch(PDOException $e){
//     die("ERROR: Could not able to execute $sql. " . $e->getMessage());
// }

// try{
//     $insertPrepared = "INSERT INTO persons (fname , lname , email) VALUES (:first_name , :last_name , :email)";

//     $stat = $link->prepare($insertPrepared);

//     $stat->bindParam(':first_name' , $first_name , PDO::PARAM_STR);
//     $stat->bindParam(':last_name' , $last_name , PDO::PARAM_STR);
//     $stat->bindParam(':email' , $email , PDO::PARAM_STR);

//     $first_name = "Ali";
//     $last_name = "saleh";
//     $email = "ali@gmail.com";

//     $stat->execute();

//     echo "Records inserted successfully.";
// }
// catch(PDOException $e){
//     die($e->getMessage());
// }
