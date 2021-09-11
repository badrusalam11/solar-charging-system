<?php
session_start();
if(isset($_SESSION["login"])){
	header("Location:dasboard.php");
}

require 'functions.php';
//cek apakah udah dipencet
if(isset($_POST["submit"])) {
		if( registrasi($_POST)> 0 && set_point($_POST) ){
			echo"<script>
			alert('user baru berhasil ditambahkan')
			</script>";
		}
		else{
			echo mysqli_error($conn);
		}
	}

if( isset($_POST["login"]) ){
	
	$username = $_POST["login_username"];
	$password = $_POST["login_password"];
	
	$result = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$username'");
	
	//cek username
	if( mysqli_num_rows($result)===1){
		
		//cek password
		$row = mysqli_fetch_assoc($result); // ngambil data dari dB
		// var_dump($row);
		if( password_verify($password, $row["Password"]) ){
			//Set session
			$_SESSION["login"]=true;
			$_SESSION["username"]=$username;
			header("Location: dasboard.php");
			exit();
		}
		
	}
	$error = True;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style2.css">
	<title>
		Animated login signup
	</title>
</head>

<body>
	<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
					<form action="" method="post">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="Username" placeholder="Username">
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" name="Email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="Password" placeholder="Password">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="confirmpass" placeholder="Confirm password">
						</div>
						<button type="submit" name="submit">
							Sign up
						</button>
						<p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
					</form>	
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-up">
						<div class="align-items-center facebook-bg">
							<i class='bx bxl-facebook'></i>
						</div>
						<div class="align-items-center google-bg">
							<i class='bx bxl-google'></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class='bx bxl-twitter'></i>
						</div>
						<div class="align-items-center insta-bg">
							<i class='bx bxl-instagram-alt'></i>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
					<?php if(isset($error)):?>
						<p style="color: red; font-style: italic; font-size:12px;">username / password salah</p>
					<?php endif;?>
					<form action="" method="post" >
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="login_username" placeholder="Username">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="login_password" placeholder="Password">
						</div>
            
    						<button type="submit" name="login">
    							Sign in
    						</button>
					</form>
						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-in">
						<div class="align-items-center facebook-bg">
							<i class='bx bxl-facebook'></i>
						</div>
						<div class="align-items-center google-bg">
							<i class='bx bxl-google'></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class='bx bxl-twitter'></i>
						</div>
						<div class="align-items-center insta-bg">
							<i class='bx bxl-instagram-alt'></i>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome back
					</h2>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
						molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
						enim harum minima possimus dignissimos deserunt rem.
					</p>
				</div>
				<div class="img sign-in">
					<img src="assets/log.svg" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
					<img src="assets/register.svg" alt="welcome">
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
						molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
						enim harum minima possimus dignissimos deserunt rem.
					</p>
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>

	<script src="login.js"></script>
</body>

</html>