<?php
$num = 6;
    for ($i=0; $i <5 ; $i++) { 
        for ($j=$i; $j <$num ; $j++) { 
           echo 'A'; 
        }
        $num--;
        echo '<br>';
    }

?>

<?php
echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 3********';   
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
echo '********Task 4 ********';  
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
echo '********Task 5 ********'; 
echo '<br>';
$alpha = range('A' , 'Z');
    
for ($i = 0; $i <= 5; $i++) {
    for ($j = $i; $j < 8; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo "$alpha[$i]";
    echo "<br>";
}
$n = 8;
for ($i = 8; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}

?>
