<?php
echo '<br>';    
echo '<br>';    
echo '********Task 1 ********'; 
echo '<br>';    

for ($i=1; $i <=5 ; $i++) { 
    for ($j=$i; $j <=5 ; $j++) { 
        echo  "&nbsp;&nbsp;";
    }
    for ($k=1; $k <= $i ; $k++) { 
        echo  "&nbsp;&nbsp;";
        echo 'A';
    }
    
    echo '<br>';
}
?>

<?php
echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 2 ********';   
?>

 <table border="1" >
<?php for ($i=1; $i<=6; $i++): ?>
<tr>
    <?php for ($j=1; $j<=5; $j++):?>
    <td><?php 
    echo "$i * $j = ";
    echo $i*$j;
     ?></td>
    <?php endfor; ?>
</tr>
<?php endfor; ?>
</table> 

<link rel="stylesheet" href="style.css">

<?php
echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 3 ********';  
echo '<br>';    

for($i = 1 ; $i<=50;$i++){
    if($i%3 == 0 && $i%5 == 0){
        echo 'FizzBuzz ';
    }elseif($i%3 == 0){
        echo 'Fizz ';
    }else if($i%5 == 0 ){
        echo 'Buzz ';
    }else{
        echo "$i ";
    }
}


echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 4 ********'; 
echo '<br>';
for ($i=1; $i <=5 ; $i++) { 
    for ($j=$i; $j <5 ; $j++) { 
        echo '1 ';
    }
    for ($k=1; $k <=$i ; $k++) { 
        echo "$i ";
    
    }
    echo '<br>';
}
echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 5 ********'; 
echo '<br>';

$alp = range('A','Z');
for ($i=1; $i <=5 ; $i++) { 
    for ($j=$i; $j <5 ; $j++) { 
        echo 'A ';
    }
    for ($k=1; $k <=$i ; $k++) { 
        
        echo $alp[$i-1]." ";
        
    }
    echo '<br>';
}
echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 6 ********'; 
echo '<br>';
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
