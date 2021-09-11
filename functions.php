<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "solar_charging_station");

// fungsi memanggil query
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

// function tambah($data){
	// global $conn;
	// $Username = htmlspecialchars($data["Username"]);
	// $Email = htmlspecialchars($data["Email"]);
	// $Password = htmlspecialchars($data["Password"]);
	
	
// // query insert into
	// $query = "INSERT INTO users (Username, Email, Password)
			// VALUES
			// ('$Username', '$Email', '$Password')
	// ";
	// mysqli_query($conn,$query);
	// return mysqli_affected_rows($conn);
// }

function registrasi($data){
	global $conn;
	$username = strtolower(stripslashes($data['Username']));
	$email = strtolower(stripslashes($data['Email']));
	$password = mysqli_real_escape_string($conn, $data['Password']);
	$password2 = mysqli_real_escape_string($conn, $data['confirmpass']);
	
	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT Username FROM users WHERE Username = '$username'");
	if( mysqli_fetch_assoc($result) ){
		echo "<script>alert('Username sudah terdaftar')</script>";
		return false;
	}
	// cek email sudah terdaftar atau belum
	$result1 = mysqli_query($conn, "SELECT Email FROM users WHERE Email = '$email'");
	if( mysqli_fetch_assoc($result1) ){
		echo "<script>alert('Email sudah terdaftar')</script>";
		return false;
	}
	
	//cek konfirmasi passowrd
	if($password !== $password2){
		echo "<script>
		alert('Konfimrasi password tidak sesuai');
		</script>";
		return false;
	}
	
	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke database
	$query = "INSERT INTO users (Username, Email, Password)
			VALUES
			('$username', '$email', '$password')
	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function cek_kode_charge($data){
	global $conn;
	$kode_charge = $data['kode_charge'];
	$select = "SELECT Kode_charge FROM kode_valid WHERE Kode_charge = '$kode_charge'";
	$sql = mysqli_query($conn, $select);
	return mysqli_affected_rows($conn);
}

function charge($data){
	global $conn;
	$username = htmlspecialchars($data["username"]);
	$durasi = htmlspecialchars($data["tambahan"]);
	$kode_charge = htmlspecialchars($data["kode_charge"]);
	$kode_unik = rand();

// query insert into
	$query = "INSERT INTO history (Username, Kode_charge, Durasi, Kode_unik)
			VALUES
			('$username', '$kode_charge','$durasi', '$kode_unik')
	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
function set_point($data){
	global $conn;
	$username = strtolower(stripslashes($data['Username']));
	$point = 0;
	// query insert into
	$query = "INSERT INTO table_point (Username, Point)
			VALUES
			('$username', '$point')
	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function point($data){
	global $conn;
	$username = htmlspecialchars($data["username"]);
	$durasi = htmlspecialchars($data["tambahan"]);
	$point = $durasi * 2;

// ambil data dari point
	$select = "SELECT Point FROM table_point WHERE Username = '$username'";
	$sql = mysqli_query($conn, $select);
	$data = mysqli_fetch_assoc($sql);
	$point_sebelumnya = $data['Point'];
	$point_akhir = $point_sebelumnya + $point;
// query UPDATE
	$query = "UPDATE table_point SET Point = '$point_akhir' WHERE Username = '$username'
	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}