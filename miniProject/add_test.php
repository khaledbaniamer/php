<?php
    session_start();
?>

<?php
  if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    unset($_SESSION['Item']);
    unset($_SESSION['Price']);
    unset($_SESSION['image']);

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

    <link rel="stylesheet" href="css/style.css">

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
            <li><a href="add_test.php">Add Product</a></li>
            <li><a href="">About Us</a></li>
        </ul>
        </div>
    </nav>

       
    <!-- form section -->
    <div id="form">
        
    <h3>Add New Product</h3>
    <form id="product-form" method="post" action="add_test.php" enctype="multipart/form-data">
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

    <div id="table">
        <table class="table">
           
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
           
      <?php 

if(isset($_POST['add'])) {
    move_uploaded_file($_FILES["product_image"]["tmp_name"],"css/image/" . $_FILES["product_image"]["name"]);
    $_SESSION ['Item'] .= $_POST['productTitle']."<br>";
    $_SESSION ['Price'] .= $_POST['productprice']."<br>";
    $_SESSION ['image'] .= $_FILES["product_image"]['name']."<br>";

    

    if(!empty($_POST['productTitle']) && !empty($_POST['productprice']) ){
      $arr1 = explode("<br>",$_SESSION ['Item']) ;
      $arr2 = explode("<br>",$_SESSION ['Price']) ;
      $arr3 = explode("<br>" , $_SESSION["image"]);

      for($i = 0 ; $i<count($arr1)-1 ; $i++){
            echo "
      <tr>
          <td><img id='tablePic' src='css/image/".$arr3[$i]."' alt=''></td>
          <td>" . $arr1 [$i] ."</td>
          <td> ".$arr2[$i] ."</td>
          <td>
          <a href='' class='btn'> <i class='fas fa-trash'></i> delete </a>
          </td>

      </tr>
        ";
      }

    }else{
      echo "<h3> please fill all field</h3>";
    }

    }

  
?>
    
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
              <a href="add_test.php" class="text-white">Add Products</a>
            </h6>
          </div>
          <!-- Grid column -->


          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="index.php" class="text-white">Home</a>
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