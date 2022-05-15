<?php

include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <form  method="post" style="width: 50% ; margin:auto ; padding-top:100px">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Collage</label>
            <input type="text" class="form-control" name="collage">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
<?php
if(isset($_POST['submit'])){

$stdName = $_POST['name'];
$stdEmail = $_POST['email'];
$stdPassword = $_POST['password'];
$stdPhone = $_POST['phone'];
$stdCollage = $_POST['collage'];

$sql = "INSERT INTO students (name , email , pass , phone , collage) VALUES ('$stdName' , '$stdEmail' ,'$stdPassword' , '$stdPhone' , '$stdCollage')";

    if(mysqli_query($connect , $sql)){
        // echo "<br> <h2>Recored added to database Successfully</h2>";
    }
}


$sqlUpdate = "UPDATE students SET name = 'kaled' , email='khaled@mail.com' , pass = '123456' ,phone='077785225' , collage = 'engineering' WHERE id = 3 ";

mysqli_query($connect , $sqlUpdate);

$sqlDelete = "DELETE FROM students WHERE id = 5";

mysqli_query($connect , $sqlDelete);
echo "<br><br><br>";
echo "
<table class='table'>
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Phone</th>
    <th>Collage</th>
    <th>Action</th>
  </tr>
</thead>";
$sqlSelect = "SELECT * FROM students";
$all = mysqli_query($connect , $sqlSelect);
$row = mysqli_fetch_all($all , MYSQLI_NUM);

for($i=0 ; $i<count($row) ; $i++){
?>

<tbody>
  <tr>
    <th scope='row'><?php echo ($i+1)?></th>
    <td><?php echo $row[$i][1]?></td>
    <td><?php echo $row[$i][2]?></td>
    <td><?php echo $row[$i][3]?></td>
    <td><?php echo $row[$i][4]?></td>
    <td><?php echo $row[$i][5]?></td>
    <td>
    
        <a href="update.php?id=<?php echo $row[$i][0]?>">update</a>
        <a href="index.php?delete=<?php echo $row[$i][0]?>">delete</a>
    </td>
  </tr>

</tbody> 
<?php
    if(isset($_GET['delete'])){
        $sql = "DELETE FROM students WHERE id ='". $_GET['delete']."'";
        mysqli_query($connect , $sql);
        header("location:index.php");
    }
    
?>

<?php

}
echo "</table>";
 ?>
 

</body>
</html> 