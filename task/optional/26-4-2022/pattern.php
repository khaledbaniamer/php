<?php 
    $alp = range('A','Z');
    for ($i=1; $i <=5 ; $i++) { 
        for ($j=$i; $j <=5 ; $j++) { 
            echo  "&nbsp;&nbsp;";
        }
        for ($k=1; $k <= $i ; $k++) { 
            echo  "&nbsp;&nbsp;";
            echo $alp[$k-1];
        }
        
        echo '<br>';
    }
    for ($i=1; $i <=5 ; $i++) { 
        for ($j=1; $j <=$i ; $j++) { 
            echo  "&nbsp;&nbsp;";
        }
        for ($k=$i; $k <= 5; $k++) { 
            echo  "&nbsp;&nbsp;";
            echo $alp[$k-1];
        }
        
        echo '<br>';
    }

    
    

?>