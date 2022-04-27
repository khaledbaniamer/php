<?php 
echo '<br>';    
echo '<br>';    
echo '********Task 1 ********'; 
echo '<br>';

$MyNum = 17;
$n = 0;

for($i = 2; $i < $MyNum; $i++) {
  if($MyNum % $i == 0){
    $n++;
    break;
  }
}

if ($n == 0){
  echo $MyNum." is a prime number.";
} else {
  echo $MyNum." is not a prime number.";
}

echo '<br>';    
echo '<br>';    
echo '********Task 2 ********'; 
echo '<br>';

$str = "khaled";
echo strrev($str);

echo '<br>';    
echo '<br>';    
echo '********Task 3 ********'; 
echo '<br>';

$str1 = "khaled";
$str2 = "khAled";

if(ctype_lower($str1)){
    echo "All latter of $str1 is lower case";
}else{
    echo "All latter of $str1 is not lower case";

}

echo '<br>';    
echo '<br>';    
echo '********Task 4 ********'; 
echo '<br>';

function sawp ($num1 , $num2){
$turn = $num1;
$num1 = $num2;
$num2 = $turn; 

echo "$num1 , $num2";

}


echo sawp(10,12);


echo '<br>';    
echo '<br>';    
echo '********Task 6 ********'; 
echo '<br>';

function armstrong($num){
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}   
}  

armstrong(407);

echo '<br>';    
echo '<br>';    
echo '********Task 7 ********'; 
echo '<br>';

function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}

echo '<br>';    
echo '<br>';    
echo '********Task 8 ********'; 
echo '<br>';

function removeDublicate($arr){
    return array_unique($arr);
}

$array1 = array(2, 4, 7, 4, 8, 4);
echo '<pre>';
print_r(removeDublicate($array1));
echo '</pre>';

?>
