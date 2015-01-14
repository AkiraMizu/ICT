<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IC-E Registration Site</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.js"></script>
<style type="text/css">
<!--

body {
	background-color:#CCCCCC;
}
-->
</style>
</head>

<body>
<?php
require 'cek-login.php'; 
//include('cek-login.php');
?>
<div class="container">
	<p align="center">
    <img src="image/Logo.png" width="141" height="133" />
    <img src="image/logo2.png" width="476" height="133" />
    </p>
    <h2 align="center" style="text-decoration:underline"> Member List </h2>
<table class="table">
    <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Program Studi</th>
        <th>Kelas</th>
        <th>Angkatan</th>
        <th>Nomor HP</th>
        <th>Divisi</th>
        <th>Opsi</th>
    </tr>
<?php
include("koneksi.php");
 $hasil = "SELECT * FROM anggota ORDER BY nim";
$query = mysqli_query($connect,$hasil);
 while ($row = mysqli_fetch_array($query)){
	echo "
<tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
	<td>$row[6]</td>
	<td>
		<div class='btn-group'>
  			<a href='edit.php?nim=$row[0]'><button type='button' class='btn btn-default'><span class='glyphicon glyphicon-pencil'></span></button></a>
			<a href='hapus.php?nim=$row[0]'><button type='button' class='btn btn-default'><span class='glyphicon glyphicon-remove'></span></button></a>
		</div>
	</td>
</tr>";
}
?>
</table>
<br />
<form method="post" action="">
<div class="btn-group">
	<button name="btn_logout" class="btn btn-warning" type="submit" id="btn_logout" value="LogOut"><span class="glyphicon glyphicon-chevron-left"></span> Log Out</button>
</div>
</form>
  </div>
</div>