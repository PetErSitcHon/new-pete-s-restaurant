<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
  
  <link rel="stylesheet" href="menu.css">
   

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

<div class="container">

<section class="products">

<div class="greetings">
            <h1 class="ourMenu">Our Menu</h1>
            <p class="menuIntro">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel praesentium illum asperiores, amet dolorem dolorum rerum, omnis quis quidem sit, at culpa delectus sed odio ducimus quisquam deserunt porro incidunt!</p>
            <br><br><br>
</div>

<div class = "food-items">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

<form action="" method="post">
   <div class = "food-item featured">
              <div class = "food-img">
                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $fetch_product['name']; ?></h2>
                <div class = "line"></div>
                <h3 class = "food-price"><?php echo $fetch_product['price']; ?></h3>
                <ul class = "rating">
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "fas fa-star"></i></li>
                  <li><i class = "far fa-star"></i></li>
                </ul>
                <div class="cont">
                  <div class="crtdiv">
                     <button id="btn" type="button" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
                  </div>
               </div>
              </div>
            </div>     
            </form>

      <?php
         };
      };
      ?>

   </div>
   </div>
           
</section>

</div>
<script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function() {
            nav.classList.toggle("active");
        }
    </script>

</body>
</html>