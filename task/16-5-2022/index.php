<?php
    require 'connect.php';

    $sql = "SELECT * FROM categories";

    $stat = $connect->query($sql);
    $row = $stat->fetchall();
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
    <form action="show.php" method="post" style="width: 50% ; margin:auto ; padding-top:100px">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Product Name</label>
          <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" step=".1" min="0" class="form-control" name="price">
        </div>
        
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Categories</label>
            <select class="form-select" name = "category">
                <option selected disabled>Choose A Category </option>
                <?php for($i=0 ; $i<count($row) ; $i++){ ?>
                <option value="<?php echo $row[$i]["categories_id"] ?>"><?php echo $row[$i]["categories_name"] ?></option>

                <?php }?>


            </select>

        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>

</body>
</html>      