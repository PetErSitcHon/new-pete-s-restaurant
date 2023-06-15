<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    

        <header>
            <div class="header-left">
                <div class="logo">
                    <img src="image/logo.png" alt="" class="logo">
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="index.php" class="active">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="history.php">History</a>
                        </li>
                        <li>
                            <a href="products.php">Menu</a>
                        </li>
                    </ul>
                    <div class="login-signup">
                        <a href="admin.php  ">Login</a>    <a href="admin.php"><i class="bi bi-cart3 "></i></a> 
                    </div>
                </nav>
            </div>
            <div class="header-right">
                <div class="login-signup">
                    <a href="cart.php"><i class="bi bi-cart3 "></i></a> 
                    <a href="admin.php">Login</a>
                </div>
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </header>

        
     <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function() {
            nav.classList.toggle("active");
        }
    </script>

</body>
</html>