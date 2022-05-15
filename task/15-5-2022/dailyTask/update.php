<?php
include 'connect.php';
$result = mysqli_query($connect,"SELECT * FROM students WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result , MYSQLI_NUM);

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
  <input type="text" class="form-control" name="name" value="<?php echo $row[1]?>">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $row[2]?>">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $row[3]?>">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $row[4]?>">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Collage</label>
    <input type="text" class="form-control" name="collage" value="<?php echo $row[5]?>">
</div>

<button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
<?php
    if(isset($_POST['update'])){
        $updatedName = $_POST['name'];
        $updatedEmail = $_POST['email'];
        $updatedPassword = $_POST['password'];
        $updatedPhone = $_POST['phone'];
        $updatedCollage = $_POST['collage'];

        $sqlUpdate = "UPDATE students SET name ='$updatedName' , email ='$updatedEmail' , pass='$updatedPassword' , phone='$updatedPhone' , collage ='$updatedCollage' WHERE id ='$_GET[id]'";

        if(mysqli_query($connect , $sqlUpdate)){
            echo "Update done successuflly";
            header('location:update.php?id='.$_GET['id']);
        }
    }
?>
</body>
</html> 

