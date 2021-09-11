<?php

session_start();
if(!isset($_SESSION["login"])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Solar Charger Station</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    </head>

<body class="exchange-background">
    <section id="page">
        <div class="contain">
            <nav class="bottom-menu">
                <a href="dasboard.php" data-menu="dasboard" class="menu-item">
                    <i class="fas fa-home"></i>
                    <span class="menu-item-label">Dasboard</span>
                </a>
                <a href="exchange.php" data-menu="exchange" class="menu-item active">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="menu-item-label">Exchange</span>
                </a>
                <a href="history.php" data-menu="history" class="menu-item">
                    <i class="fas fa-bell"></i>
                    <span class="menu-item-label">History</span>
                </a>
                <a href="profile.php" data-menu="profile" class="menu-item">
                    <i class="fas fa-user-circle"></i>
                    <span class="menu-item-label">Profile</span>
                </a>
				<a href="logout.php" data-menu="home" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="menu-item-label">Sign Out</span>
                </a>
            </nav>

        </div>
    </section>

    <!-- product section starts  -->

    <section class="product" id="product">

        <h1 class="heading">Exchange <span> Pulsa</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-1.png" alt="">
                <h3>Axis</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> Rp. 10.000 </div>
                <a href="#" class="cart">add to cart</a>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-2.png" alt="">
                <h3>By.U</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> Rp. 10.000 </div>
                <a href="#" class="cart">add to cart</a>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-3.png" alt="">
                <h3>im3 ooredoo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> Rp. 10.000  </div>
                <a href="#" class="cart">add to cart</a>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-4.png" alt="">
                <h3>Smartfren</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> Rp. 10.000  </div>
                <a href="#" class="cart">add to cart</a>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-5.png" alt="">
                <h3>Telkomsel</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> Rp. 10.000  </div>
                <a href="#" class="cart">add to cart</a>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-6.png" alt="">
                <h3>XL Axiata</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> Rp. 10.000 </div>
                <a href="#" class="cart">add to cart</a>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-7.png" alt="">
                <h3>3</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> Rp. 10.000  </div>
                <a href="#" class="cart">add to cart</a>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-8.png" alt="">
                <h3>Simpati Loop</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> Rp. 10.000  </div>
                <a href="#" class="cart">add to cart</a>
            </div>


        </div>

    </section>

    <!-- product section ends -->




    <!-- import library icon fontawesome -->
    <script src="https://kit.fontawesome.com/185fa895b6.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>
</html>