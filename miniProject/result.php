<?php

        session_start();
        
        $name = $_GET['productTitle'];
        $description = $_GET['productDescription'];
        $price = $_GET['productprice'];

        $_SESSION['name'] = $name;
        $_SESSION['description'] = $description;
        $_SESSION['price'] = $price;

        
    ?>