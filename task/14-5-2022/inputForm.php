<?php
include 'pdo.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method = "post"  style = "width:50% ; margin :auto ; padding-top : 200px">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "fname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "lname">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name = "email">
  </div>

  <button type="submit" class="btn btn-primary" name="set">Submit</button>
</form>

<?php

    if(isset($_POST['set'])){
        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email'])){
            $sql = "INSERT INTO persons (fname , lname , email) VALUES (:fname , :lname , :email)";
            $stat = $link->prepare($sql);

            $stat->bindParam(':fname' , $first_name , PDO::PARAM_STR);
            $stat->bindParam(':lname' , $last_name , PDO::PARAM_STR);
            $stat->bindParam(':email', $email , PDO::PARAM_STR);

            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            $email = $_POST['email'];

            $stat->execute();
            
            echo "<h1>Record added successfully</h1>";
        }else{
            echo "<h1>Please fill all filed</h1>";
        }
 
    }

    $sql = "SELECT * FROM persons";
    $result = $link->query($sql);

    $row = $result->fetchAll(PDO::FETCH_NUM);

    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
    echo "  <br><br><table class='table'>
    <thead>
      <tr>
        <th >#</th>
        <th >First</th>
        <th >Last</th>
        <th >Email</th>
        <th >Action</th>
      </tr>
    </thead>
    <tbody>";
    for($i = 0 ; $i<count($row) ; $i++){
    echo "
      <tr>
        <th >".($i+1)."</th>
        <td>".$row[$i][1]."</td>
        <td>".$row[$i][2]."</td>
        <td>".$row[$i][3]."</td>
        <td>
        <a href='#'><i class='fa-solid fa-pencil'></i>Update</a> 
        <a href='#'><i class='fa-solid fa-trash'></i>Delete</a>  

        </td>
      </tr>

    ";  
    }
    echo "
    </tbody>
    </table>";

?>

<script src="https://kit.fontawesome.com/909808575d.js" crossorigin="anonymous"></script>
</body>
</html>