<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">
   <link rel="stylesheet" href="style2.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<header class="header">

   <div class="header-2">
      

      <div class="flex">
         <a href="home.php" class="logo"><img src="img/logo new.png" class="logo" alt="" /></a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
            <a href="orders.php">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>

         <div class="flex2">
            <a href="login.php" class="white-btn">Login</a>
         </div>
         <div class="flex3">
            <a href="register.php" class="white-btn">Register</a>
         </div>

      </div>
      
   </div>

</header>

<section id="hero">
      <h4>Trade in offer</h4>
      <h2>Super value deals</h2>
      <h1>On all products</h1>
      <p>Save more with coupons & up to 70% off! </p>
      <button><a href="shop.php">Shop Now</a></button>
</section>

<section id="feature" class="flexbox">
            <div class="box">
                <img src="img/features/f1.png" alt="">
                <h6>Free Shopping</h6>
            </div>

            <div class="box">
                <img src="img/features/f2.png" alt="">
                <h6>Free Shopping</h6>
            </div>

            <div class="box">
                <img src="img/features/f3.png" alt="">
                <h6>Free Shopping</h6>
            </div>

            <div class="box">
                <img src="img/features/f4.png" alt="">
                <h6>Free Shopping</h6>
            </div>

            <div class="box">
                <img src="img/features/f5.png" alt="">
                <h6>Free Shopping</h6>
            </div>
            <div class="box">
                <img src="img/features/f6.png" alt="">
                <h6>Free Shopping</h6>
            </div>
</section>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="container" id="product-container"></div>
</section>

<section id="banner" class="banners">
   <h4>Repair Services</h4>
   <h2>Up to <span>50% off</span> - All t-Shirts & Accessories</h2>
   <button class="normal"><a href="shop.php">Explore More</a></button>
</section>


<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="container" id="product2-container"></div>
</section>


<section id="banner2" class="section-p1">
            <div class="banner-box">
                <h4>crazy deals</h4>
                <h2>buy 1 get 1 free</h2>
                <span>the best classic dress in on sale</span>
                <button class="white">Learn More</button>
            </div>

            <div class="banner-box banner-box2">
                <h4>summer</h4>
                <h2>upcoming season</h2>
                <span>the best classic dress in on sale</span>
                <button class="white">Collection</button>
            </div>
</section>

        <section id="banner3">
            <div class="banner-box">
                <h2>SEASONAL SALE</h2>
                <h3>Winter Collection -50% Off</h3>
            </div>

            <div class="banner-box banner-box2">
                <h2>The Collection</h2>
                <h3>Summer 2023</h3>
            </div>

            <div class="banner-box banner-box3">
                <h2>T-Shirt</h2>
                <h3>A New Brand</h3>
            </div>
        </section>

<!-- FOOTER -->
<footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/logo new.png" alt="">
                <h4>Contact</h4>
                <p><strong>Adress: </strong> Surabaya City</p>
                <p><strong>Phone: </strong> (+62)87 7572 8982</p>
                <p><strong>Hours: </strong> 10.00 - 17.00, Mon - Sat</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>Quick Links</h4>
                <a href="#">Home</a>
                <a href="#">Shop</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </div>

            <div class="col">
                <h4>Resources</h4>
                <a href="#">Company</a>
                <a href="#">Community</a>
                <a href="#">Careers</a>
                <a href="#">Legal</a>
            </div>

            <div class="col">
                <h4>Features</h4>
                <a href="#">Shipping</a>
                <a href="#">Returns</a>
                <a href="#">Payment Status</a>
                <a href="#">Privacy Policy</a>
            </div>

            <div class="col">
                <h4>Get Help</h4>
                <a href="#">Showcase</a>
                <a href="#">Teams</a>
                <a href="#">Account</a>
                <a href="#">FAQ</a>
            </div>

            <div class="row">
                <p>Secured Payment Gateways</p>
                <img src="img/pay/pay.png" alt="">
            </div>
            
            <div class="copyright">
                <p>&copycopyright 2023 All Right Reserved | Ecommerce Website</p>
            </div>
        </footer>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>