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
<header>
    
</header>
<body class="dasboard-background">
    <section id="page">
        <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">
            <img src="./img/baterai.png"> <br> Charge Now</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
             <h1>Countdown Timer</h1>
             <div id="container">
                 <p id="hour-label" class="label">Hours</p><p id="min-label" class="label">Minutes</p><p id="sec-label" class="label">Seconds</p>
                 <input id="hour" type="number" max="99" min="0" value="0" class="time"><p id="p1" class="semicolon">:</p><input id="minute" type="number" max="60" min="0" value="0" class="time"><p id="p2" class="semicolon">:</p><input id="sec" type="number" max="60" min="0" value="0" class="time">
                 &nbsp &nbsp &nbsp &nbsp <button id="start" class="btn" align ="center">Start</button>
                 <!-- <button id="reset" class="btn">Reset</button> -->
             </div>
         </div>
      </div>
        <div class="contain">
            <nav class="bottom-menu">
                <a href="dasboard.php" data-menu="dasboard" class="menu-item active">
                    <i class="fas fa-home"></i>
                    <span class="menu-item-label">Dasboard</span>
                </a>
                <a href="exchange.php" data-menu="exchange" class="menu-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="menu-item-label">Exchange</span>
                </a>
                <a href="history.php" data-menu="history" class="menu-item">
                    <i class="fas fa-bell"></i>
                    <span class="menu-item-label">History</span>
                </a>
                <a href="profile.php" data-menu="home" class="menu-item">
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


    <!-- import library icon fontawesome -->
    <script src="https://kit.fontawesome.com/185fa895b6.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="test.js"></script>

</body>
</html>
