<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Login</title>
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

<div class="contianer" style = "width : 30% ; margin:auto ;margin-top:10% ; border:1px gray solid;">
<form style="padding:10%"  method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <button type="submit" class="btn btn-primary" name = "login">Login</button>
</form>
</div>
<?php
    $pdo = mysqli_connect("localhost" , "root" , "" , "testpdo");
    $sql = "SELECT email , pass FROM userinfo";
    $test = mysqli_query($pdo , $sql);
    $row = mysqli_fetch_assoc($test);
    echo '<pre>';
    var_dump($row);
    
    echo '</pre>';
    // echo mysqli_num_rows($test);
    // for ($i=0; $i <count($row) ; $i++) { 
    //     echo $row['email'] .'<br>';
    //     echo $row['pass'] .'<br>';
    // }
    if(isset($_POST['login'])){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT email , pass FROM userinfo";
            $arr = mysqli_query($pdo , $sql);
            $rows = mysqli_fetch_array($arr);
            
            $flag = false;
            for ($i=0; $i <count($rows) ; $i++) { 
                if($email == $rows['email'] && $password == $rows['pass']){
                    echo $rows['email'] ;
                    $flag = true;
                    break;
                }else{
                    $flag = false;
                }
            }
            if($flag){
                echo '<br><h1>Login Done Successuflly</h1>';
            }else{
                echo '<br><h1>Username or Password wrong</h1>';
            }
        }else{
            echo '<br> Please fill all field';
        }
    }


?>
</body>
</html>