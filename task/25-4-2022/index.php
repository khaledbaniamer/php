<?php
// Task 1 :

echo '<br>'."***** Task 1 ******".'<br>';
    $leap_year = 2013;

    if($leap_year%4 == 0){
        echo "$leap_year is leap year";
    }else{
        echo "$leap_year is not leap year";
    }
    echo '<br>';
    echo '<br>';
    echo '<br>';


    //Task 2 :
    echo '<br>'."***** Task 2 ******".'<br>';
    $temp = 27 ; 
    if($temp<20){
        echo "It is summertime";
    }else{
        echo "It is wintertime";
    }
    echo '<br>';
    echo '<br>';
    echo '<br>';

    //Task 3 :
    echo '<br>'."***** Task 3 ******".'<br>';
    $num1 = 2 ;
    $num2 = 2 ;

    
    if($num1 == $num2){
        $result = ($num1 + $num2)*3;
        echo $result;
    }else{
        echo $num1 + $num2;
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    //Task 4 :
    echo '<br>'."***** Task 4 ******".'<br>';

    $fnum = 10 ; 
    $snum = 10;
    if(($snum + $fnum)==30){
        echo $fnum + $snum;
    }else{
        echo 'false';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    //Task 5 :
    echo '<br>'."***** Task 5 ******".'<br>';

    $three = 20 ;
    if($three%3 ==0 ){
        echo 'true';
    }else{
        echo 'false';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    //Task 6 :
    echo '<br>'."***** Task 6 ******".'<br>';


    $numBetween = 50;
    if($numBetween>=20 && $numBetween<=50){
        echo 'true';
    }else{
        echo 'false';
    }


    echo '<br>';
    echo '<br>';
    echo '<br>';

    //Task 7 :
    echo '<br>'."***** Task 7 ******".'<br>';
    $lnum1 = 1 ; 
    $lnum2 = 20 ; 
    $lnum3 = 9 ; 

    if($lnum1>$lnum2 &&  $lnum1>$lnum3){
        echo $lnum1;
    }else if($lnum2>$lnum1 && $lnum2>$lnum3){
        echo $lnum2;
    }else{
        echo $lnum3;
    }

    
    echo '<br>';
    echo '<br>';
    echo '<br>';

    //Task 8 :
    echo '<br>'."***** Task 8 ******".'<br>';

    $units = 202;
    if($units >= 0 && $units<=50){
        echo $units * 2.5 ; 
    }elseif($units >= 51 && $units<=100){
        echo $units * 5 ;
    }elseif($units >= 101 && $units<=250){
        echo $units * 6.2 ;
    }elseif($units >= 250){
        echo $units * 7.5 ;
    }


    echo '<br>';
    echo '<br>';
    echo '<br>';

    //Task 9 :
    echo '<br>'."***** Task 9 ******".'<br>';

    $age = 15 ; 
    if($age < 18){
        echo 'is no eligible to vote';
    }else{
        echo 'is  eligible to vote';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    //Task 10 :
    echo '<br>'."***** Task 10 ******".'<br>';

    $singNumber = -60 ; 
    if($singNumber ==0 ){
        echo 'zero';
    }else if($singNumber <0){
        echo 'Negative';
    }else{
        echo 'Positive ';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';
    //Task 11 :
    echo '<br>'."***** Task 11 ******".'<br>';

    $calNum1 = 20 ; 
    $calNum2 = 10 ;
    $claOperation = '*';

    switch ($claOperation) {
        case '+':
            echo $calNum1 + $calNum2 ;
            break;
        case '-':
            echo $calNum1 - $calNum2 ;
            break;    
        case '*':
            echo $calNum1 * $calNum2 ;
            break;
        case '/':
            echo $calNum1 / $calNum2 ;
            break;     

    }

    echo '<br>';
    echo '<br>';
    echo '<br>';
    //Task 12 :
    echo '<br>'."***** Task 12 ******".'<br>';

    $studentMarks = [60,86,95,63,55,74,79,62,50];

    $avg  = ($studentMarks[0]+$studentMarks[1]+$studentMarks[2]+$studentMarks[3]+$studentMarks[4]+$studentMarks[5]+$studentMarks[6]+$studentMarks[7]+$studentMarks[8])/9;
    echo $avg . '<br>';
    switch ($avg) {
        case ($avg >= 35 && $avg<=60):
            echo 'F';
            break;
        case ($avg >= 61 && $avg<=70):
            echo 'D';
            break; 
        case ($avg >= 71 && $avg<80):
            echo 'C';
            break;
        case ($avg >= 81 && $avg<=90):
            echo 'B';
            break; 
        case ($avg >= 91 && $avg<=100):
            echo 'A';
            break;         
 
    }
?>