<?php
	$connect = mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"register_ice") or exit("Server dan Database tidak terhubung!");
?>