<?php
include('koneksi.php');
if(isset($_POST['btn_login'])){
	session_start();

$username = $_POST['txt_user'];
$password = $_POST['txt_pass'];

if (empty($username) && empty($password)) {
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	header('location:login.php?error=3');
	break;
}

$q = mysqli_query($connect,"select * from akun where user='$username' and password='$password'");

if (mysqli_num_rows($q) == 1) {
	$_SESSION['user'] = $username;
	header('location:list.php');
	//echo("Sukses Login");
} else {
	header('location:login.php?error=4');
	//echo("Gagal Login");
};
}
?>