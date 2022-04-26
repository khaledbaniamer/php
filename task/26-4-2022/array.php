<!-- Array -->
<?php 
echo '<br>';
echo '<br>';
echo '<br>';


//Task 1 :
echo '<br>'."***** Task 1 ******".'<br>';

$colors = array('white', 'green', 'red') ;
krsort($colors);
foreach($colors as $color){
    echo $color . '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';


//Task 2 :
echo '<br>'."***** Task 2 ******".'<br>';

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

asort($cities);

foreach($cities as $key => $values){
    echo "The capital of $key is $values  <br> ";
}

echo '<br>';
echo '<br>';
echo '<br>';


//Task 3 :
echo '<br>'."***** Task 3 ******".'<br>';
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo $color[4];

echo '<br>';
echo '<br>';
echo '<br>';


//Task 4 :
echo '<br>'."***** Task 4 ******".'<br>';

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $key => $value){
    echo "$key = $value <br>";
}

echo '<br>';
echo '<br>';
echo '<br>';


//Task 5 :
echo '<br>'."***** Task 5 ******".'<br>';

$words =  array("abcd","abc","de","hjjj","g","wer");

usort($words , function ($a , $b){
    return strlen($a)<=>strlen($b);
});

echo 'The shortest array length is '.strlen($words[0]) .' . The longest array length is '.strlen($words[count($words)-1]);

