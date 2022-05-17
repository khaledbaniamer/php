<?php
    require "connect.php";

    $currId = $_GET['id'];


    $sqlCurrentID = "SELECT items.id , items.name , items.price , categories.categories_name ,categories.categories_id 
    FROM items 
    LEFT JOIN categories 
    ON items.categories_id = categories.categories_id
    WHERE items.id = $currId
    ";
    
     //this sql to get data of current product to do update  
    $statCurrRow = $connect->query($sqlCurrentID);
    $getRow = $statCurrRow->fetch(PDO::FETCH_ASSOC);

    print_r($getRow);


    //this sql to get all categories in database to show it in form 
    $sqlCategory = "SELECT * FROM categories";
    $statCategory = $connect->query($sqlCategory);
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
    <form action="update.php?id=<?php echo $currId?>" method="post" style="width: 50% ; margin:auto ; padding-top:100px">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Product Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $getRow['name']?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="number" step=".1" min="0" class="form-control" name="price" value="<?php echo $getRow['price']?>">
        </div>
        
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Categories</label>
            <select class="form-select" name = "category">
                <option selected  value="<?php echo $getRow['categories_id']?>"><?php echo $getRow['categories_name']?></option>
                <?php while($allCategory = $statCategory->fetch()){ ?>
                <option value="<?php echo $allCategory['categories_id'] ?>"><?php echo $allCategory["categories_name"] ?></option>

                <?php }?>


            </select>

        </div>

        <button type="submit" class="btn btn-primary" name="update">update</button>
      </form>


      <?php
    
    if (isset($_POST['update'])){
    if(!empty($_POST['name']) && !empty($_POST['price'])){
        $prd_name = $_POST['name'];
        $prd_price = $_POST['price'];
        $prd_category = $_POST['category'];

        $sqlUpdated = "UPDATE items SET name='$prd_name',price='$prd_price',categories_id='$prd_category' WHERE id = '$currId'";
        
        $connect->exec($sqlUpdated);
        header("location:update.php?id=$currId");
    }
    }
    
?>
</body>
</html>