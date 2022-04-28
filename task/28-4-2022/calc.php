<?php
if(isset($_POST['sub'])){
$num1=$_POST['n1'];
$num2=$_POST['n2'];
$oprnd=$_POST['sub'];
if($oprnd=="+")
$ans=$num1+$num2;
else if($oprnd=="-")
$ans=$num1-$num2;
else if($oprnd=="x")
$ans=$num1*$num2;
else if($oprnd=="/")
$ans=$num1/$num2;
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
<h1>Simple Calculator</h1><br>
First Number:<input name="n1" value=""><br>
Second Number:<input name="n2" value=""><br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/"><br>
<br>Result: <input type='text' value="<?php echo $ans; ?>"><br>
</form>
</body>
</html>

