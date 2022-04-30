<?php

$link = mysqli_connect("localhost", "root", "", "miniproject");

$message = "";
if(isset($_POST['add'])){
    $name = $_POST['productTitle'];
    $price = $_POST['productprice'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'image/'.$product_image;

    if(empty($name) || empty($product_image) || empty($price)){
        $message = 'please fill all field';
    }else{
        $update = "
        INSERT INTO products (name , price , image) VALUES ('$name' , '$price' ,'$product_image' )";
        $add = mysqli_query($link , $update);
        if($add){
            $message = "Product added successfully";
        }else{
            $message = "Product is not added ";
        }
    }
};
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($link, "DELETE FROM products WHERE id = $id");
    header('location:add_product.php');
 };
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <title>E-commenance</title>

    <style>
      #tablePic{
        height : 100px;
      }
      @media screen and (min-width: 480px) and (max-width: 768px){
        #product-form{
          height: 400px;
    } 
      input , label{
    width : 100%;
    margin : 1% 0;
    }
      }
      @media screen and (max-width: 479px) {
    #products{

       
        display: flex;
        flex-direction: column;
       
    }

    #links{
    grid-area: 1/4/2/10;
    font-size : 12px;
  }
      #product-form{
          display: flex;
          flex-direction: column;
          width : 60%;
          justify-content: center;
          height: 300px;
      }
      input , label{
        width : 100%;
        margin : 1% 0;
      }
      td img {
        height:80px;
      }
      }
    </style>
</head>
<body>
    <nav >
        <div id="logo">
            <img src="logo.png" height = "60px" alt="no">
        </div>
        <div id="links">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="">About Us</a></li>
        </ul>
        </div>
    </nav>
    <?php if($message){
        echo "<div style='margin : 2%'>";
       echo "<h5 style='text-align : center  ; width:50% ; margin :auto ; background-color : grey ;vertical-align: middle; padding : 2%;  font-size : 1.5em'>$message</h5>" ;
       echo "</div>";
    }?>
       
    <!-- form section -->
    <div id="form">
        
    <h3>Add New Product</h3>
    <form id="product-form" method="post" action="add_product.php" enctype="multipart/form-data">
        <div>
            <label>Poduct Title</label>
            <input type="text" name="productTitle">

            <label>Poduct Price</label>
            <input type="number" name="productprice" min ="0">

            <label>Poduct Image</label>
            <input type="file"  name="product_image" class="box">

            
            <input type="submit"  value="Add" name="add"> 
        </div>
    </form>

    </div>
    <?php

        $select = mysqli_query($link, "SELECT * FROM products");

    ?>
    <div id="table">
        <table class="table">
           
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
           
            
        <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img id="tablePic" src="image/<?php echo $row['image']; ?>" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
            <td>
               <a href="add_product.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
         
        </table>
    </div>

  <!-- Footer -->
  <footer class="text-center text-white" >
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-3">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-3">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">About us</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Add Products</a>
            </h6>
          </div>
          <!-- Grid column -->


          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Help</a>
            </h6>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-2" />


      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-3">
        <a href="" class="text-white me-4">
          <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div id="copyright"
         class="text-center p-2"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         ></a
        >
    </div>
    <!-- Copyright -->
  </footer>
</body>
</html>