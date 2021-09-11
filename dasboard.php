<?php

session_start();
if(!isset($_SESSION["login"])){
	header("Location:index.php");
}
require 'functions.php';

if(isset($_POST['start'])){
	if(cek_kode_charge($_POST)>0){
		$_SESSION['tambahan'] = $_POST['tambahan'];
		charge($_POST);
		point($_POST);
	}
	else{
		echo "<script>alert('Kode yang anda masukkan salah!')</script>";
	}
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
		<link rel="stylesheet" href="assets/css/select.css" />
    </head>
<header>
    
</header>
<body class="dasboard-background">
    <section id="page">
        <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn" <?php if(isset($_POST['start'])){echo"hidden";} ?> >
            <img src="./img/baterai.png"> <br> Charge Now</label>
         <div class="container" <?php if(isset($_POST['start'])){echo"style='display: block;'";} ?>>
            <label for="show" class="close-btn fas fa-times" title="close"></label>
             <h1>Countdown Timer</h1>
			 <form action="" method="post">
			 <input type="checkbox" id="show">
             <div id="container">
                 <!-- <p id="hour-label" class="label">Hours</p><p id="min-label" class="label">Minutes</p><p id="sec-label" class="label">Seconds</p>
                 <input id="hour" type="number" max="99" min="0" value="0" class="time"><p id="p1" class="semicolon">:</p><input id="minute" type="number" max="60" min="0" value="0" class="time"><p id="p2" class="semicolon">:</p><input id="sec" type="number" max="60" min="0" value="0" class="time"> -->
				 <div class="timer">
				 <p id="demo"></p>
				 <input name="kode_charge" type="text" placeholder="Input kode alat" />
				 </div>
				<div class="select">
					<select name="tambahan" id="standard-select">
						<option value="1">1 menit</option>
						<option value="5">5 menit</option>
						<option value="15">15 menit</option>
						<option value="30">30 menit</option>
						<option value="60">60 menit</option>
					</select>
				</div>
				<input name="username" type="text" value="<?=$_SESSION['username'];?>" hidden>
				<button type="submit" name="start" id="start" class="btn" align ="center">Start</button>
				
                 <!-- <button id="reset" class="btn">Reset</button> -->
             </div>
			 </form>
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
    <!-- <script src="main.js"></script> -->
	<!-- <script src="test.js"></script> -->

<script>
// Set the date we're counting down to
if (localStorage.getItem("endtime") === null) {
  var endtime = new Date().getTime();
  localStorage.setItem("endtime", endtime);
}
  else{
  var endtime = localStorage.getItem("endtime", endtime);
  }
  var tambahan = <?= $_SESSION['tambahan']?>*60*1000;
  var countDownDate = tambahan + parseInt(endtime);

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
   
   // check if hours , minute, and second is not empty
   if(hours != 0 || minutes != 0 || seconds != 0){
		document.getElementById("start").disabled = true;
	}
	else if(hours == 0 && minutes == 0 && seconds == 0){
		document.getElementById("start").disabled = false;
	}
   
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = hours + " : "
  + minutes + " : " + seconds ;
   
   
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
	document.getElementById("demo").style.color="red";
	document.getElementById("demo").style.size="15px";
    document.getElementById("demo").innerHTML = "WAKTU HABIS, SILAHKAN KEMBALI BESOK";
  }
}, 1000);
</script>

</body>
</html>
