<?php

class Connection {
    public static function make ($host , $dbname , $user , $password){
        $dsn = "mysql:host = $host ; dbname=$dbname";
        
            try{
                $pdo = new PDO($dsn , $user , $password);

            }
            catch(PDOException $e){
                die($e->getMessage());
            }

    }
}

return Connection::make("localhost" , "testpdo" , "root" , "")
?>