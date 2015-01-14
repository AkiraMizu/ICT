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
<div class="container">
	<p align="center">
    <img src="image/Logo.png" width="141" height="133" />
    <img src="image/logo2.png" width="476" height="133" />
    </p>
    <div class="text-center">
    <p align="center"><span class="glyphicon glyphicon-user"></span> Login Site <span class="glyphicon glyphicon-user"></span></p>
    <form name="login" method="post" action="otentikasi.php">
    	<table align="center" border="0" cellpadding="25" cellspacing="15" class="table-condensed">
 		 <tr>
  		  <th scope="row">Username</th>
		   <td scope="row">
           		<div class="input-group">
                    <input class="form-control" name="txt_user" type="text" id="txt_user" size="10" maxlength="10" /></div>
           </td>
 		 </tr>
 		 <tr>
 		   <th scope="row">Password</th>
		    <td scope="row">
            	<div class="input-group">
                    <input class="form-control" name="txt_pass" type="password" id="txt_pass" size="10" maxlength="10" /></div>
            </td>
		  </tr>
      </table>
      <input name="btn_login" class="btn btn-primary" type="submit" id="btn_login" value="Log In"></input>
      <a href="index.html" name="btn_exit" class="btn btn-danger" id="btn_exit"><span class="glyphicon glyphicon-home"></span> Kembali</a>
<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	} else if ($_GET['error'] == 5) {
		echo '<h3>Anda belum login!</h3>';
	}
}
?>
      </form></div>
</div>
</body>