<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sing Up</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex">
      <button class="btn btn-outline-success mx-5" type="submit">Logout</button>
    </form>
  </div>
</nav>


<div class="contianer" style = "width : 30% ; margin:auto ;margin-top:5% ; border:1px gray solid;">
<form action="singUp.php" method="post" style="padding:10%">

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text"  class="form-control" name="registerName">
    </div>

    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="registerEmail">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password"  class="form-control" name="registerPassword">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password"  class="form-control" name="registerConfirmPassword">
    </div>
    <button type="submit" class="btn btn-primary" name="register">Register</button>
</form>
</div>

<?php
$pdo = mysqli_connect("localhost", "root", "", "testpdo");


    if(isset($_POST['register'])){
        if(!empty($_POST['registerName']) && !empty($_POST['registerEmail'])&& !empty($_POST['registerPassword']) && !empty($_POST['registerConfirmPassword'])){

        if($_POST['registerPassword'] == $_POST['registerConfirmPassword']){
            
            $name = $_POST['registerName'];
            $email = $_POST['registerEmail'];
            $password = $_POST['registerPassword'];

            $sql = "INSERT INTO userinfo(name , email , pass) VALUES ('$name' , '$email ', '$password')";

            if(mysqli_query($pdo , $sql)){
                echo '<br> Register Done Successfully';
            }
        }
            else
            {
                echo '<br>Password must be match';
            }

        }else{
            echo '<br>Please fill all filed';
        }
    }
?>
</body>
</html>