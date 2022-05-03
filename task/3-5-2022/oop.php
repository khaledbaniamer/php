<?php

class AppleDevice {

    
// <!-- properties -->
// <!-- Accesses Modifiers public , private , protected -->
public function __construct (){
    echo 'Hello from construct';
}
public  $ram;
public $inch;
public $space;
public $color;

// <!-- Methodes  -->
//is the a actions that class do

public function getSpecification (){
    echo 'This iphone Ram Is :' . $this->ram;
}

}

$iphone6plus = new AppleDevice ();

$iphone6plus->inch = "5 Inch";
$iphone6plus->ram = "2GB";
$iphone6plus->space = "64 GB";
$iphone6plus->color = "Red";

$iphone6plus;

echo '<pre>';

var_dump($iphone6plus);

echo '<pre>';