<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['nama_admin'] = $row['nama_admin'];
            	$_SESSION['id_admin'] = $row['id_admin'];
				$_SESSION['level'] = $row['level'];
            	header("Location: home.php?x=order");
		        exit();
            }else{
				header("Location: login.php?error=Incorect Username or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}