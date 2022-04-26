<!-- loops -->
<?php 
    echo '<br>';
    echo '<br>';
    echo '<br>';


    //Task 1 :
    echo '<br>'."***** Task 1 ******".'<br>';
    $total = 0 ;
    for($i=0; $i<=30;$i++){
        $total += $i;
    }
    echo $total ;

    echo '<br>';
    echo '<br>';
    echo '<br>';


    //Task 2 :
    echo '<br>'."***** Task 2 ******".'<br>';

    for($i = 1 ; $i<=5;$i++){
        for($j = 1; $j<=5;$j++){
            if($i==$j){
                echo "$i";
            }else{
                echo 0;
            }
            
        }
        echo '<br>';
    }


    echo '<br>';
    echo '<br>';
    echo '<br>';


    //Task 3 :
    echo '<br>'."***** Task 3 ******".'<br>';

    $fact = 1;

    for($i = 1 ; $i<=5 ; $i++){
        $fact *= $i;
    }
    echo $fact;

    echo '<br>';
    echo '<br>';
    echo '<br>';


    //Task 4 :
    echo '<br>'."***** Task 4 ******".'<br>';
    $i=2;
    $n1 = 0 ; 
    $n2 = 1 ; 
    $n3  =0;
    while($i<=7){
        $n3 = $n1+$n2;
        $n1 = $n2;
        $n2 = $n3;
        $i++;
    }
    echo $n3;

    echo '<br>';
    echo '<br>';
    echo '<br>';


    //Task 5 :
    echo '<br>'."***** Task 5 ******".'<br>';
    $num = 0;
    $break = 1;
    for($i=1 ; $i<=15;$i++){
        $num++;
        for($j = 0 ; $j<$num ; $j++){
            echo $i;
            $i++;
        }
        $i--;
        echo '<br>';
    }


?>
