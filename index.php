<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="bg_image"></div>

    <?php include 'header.php'; ?>

    <div class="content">
        <div class="box">
            <h2 id="business_name"><span >Pete's</span><br>Restaurant</h2> 
        </div>

        <div class="box"> 
            <p>“A good restaurant server is an attaché to good health.”</p>
        </div>

        <div class="box">
                <button class="menu_button"><a href="products.php">MENU</a></button>
        </div>
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