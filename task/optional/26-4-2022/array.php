<?php 
echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 1 ********'; 
echo '<br>';    

$tem = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];


$largestTem = 0;
$lowestTem = 0;
$total = 0 ;
foreach($tem as $temValue){
    $total += $temValue;
}
$avgTem = $total/count($tem);

sort($tem);




echo "Average Temperature is: $avgTem
List of seven lowest temperatures: {$tem[0]}, {$tem[1]}, {$tem[2]}, {$tem[3]}, {$tem[4]}, 
List of seven highest temperatures: {$tem[count($tem)-5]}, {$tem[count($tem)-4]}, {$tem[count($tem)-3]}, {$tem[count($tem)-2]},{$tem[count($tem)-1]}
";

echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 2 ********'; 
echo '<br>'; 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$allArray = array_merge($array1 , $array2);
echo '<pre>';
print_r($allArray);
echo '</pre>';

echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 3 ********'; 
echo '<br>'; 

for($i = 200 ; $i<=250 ; $i++){
    if($i%4 == 0){
        echo "$i ,";
    }
}

echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 4 ********'; 
echo '<br>'; 
$n1 = 20;
$n2 = 25;
for($i = 0 ; $i<10 ; $i++){
    echo (rand($n1,$n2)) . " ";
}

echo '<br>';    
echo '<br>';    
echo '<br>';    
echo '********Task 5 ********'; 
echo '<br>'; 

$array1 = array( 2, 0, 10, 12, 6) 
