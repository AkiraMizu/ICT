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
include("koneksi.php");
$seleksi="SELECT * FROM akun WHERE user='admin'";
$hasilseleksi=mysqli_query($connect,$seleksi);
$baris=mysqli_fetch_array($hasilseleksi);
$nim_ex = $_GET['nim'];
$query = mysqli_query($connect,"SELECT * FROM `register_ice`.`anggota` WHERE nim='$nim_ex'");	
$data = mysqli_fetch_array($query);
?>
<div class="container">
	<p align="center">
    <img src="image/Logo.png" width="141" height="133" />
    <img src="image/logo2.png" width="476" height="133" />
    </p>
    <h2 style="text-decoration:underline; color:#FFFFFF" align="center">Registration Form</h2>
      <form name="register" method="post" action="">
    <table align="center">
    <tr>
    <td width="15%"><h4>NIM</h4></td>
    <td><input class="form-control" name="txt_nim" type="text" id="txt_nim" maxlength="11" value="<?php echo $data['nim']; ?>" placeHolder="NIM" /></td>
    </tr>
    <tr>
    <td width="15%"><h4>Nama</h4></td>
    <td><input class="form-control" name="txt_nama" type="text" id="txt_nama" maxlength="32" value="<?php echo $data['nama']; ?>" placeHolder="Nama" /></td>
    </tr>
    <tr>
    <td width="15%" nowrap><h4>Program Studi</h4></td>
    <td><select class="form-control" name="list_prodi" id="list_prodi">
    	<option selected style="display:none">-=Pilih Program Studi=-</option>
		<option disabled>-Jurusan Elektro-</option>
		<option value="S1 Pendidikan Teknik Elektro">S1 PTE</option>
		<option value="S1 Teknik Elektro">S1 TE</option>
  		<option value="D3 Teknik Sipil">D3 TL</option>
		<option disabled>-Jurusan Informatika-</option>
		<option value="S1 Pendidikan Teknologi Informasi">S1 PTI</option>
		<option value="S1 Teknik Informatika">S1 TI</option>
		<option value="S1 Sistem Informatika">S1 SI</option>
		<option value="D3 Managemen Informatika">D3 MI</option>
		</select></td>
      </tr>
      <tr>
      <td width="15%"><h4>Kelas</h4></td>
      <td><select class="form-control" name="list_kelas" id="list_kelas">
		  <option selected style="display:none">-=Pilih Kelas=-</option>
    	  <option value="A">A</option>
		  <option value="B">B</option>
		  <option value="C">C</option>
		  <option value="D">D</option>
		  </select></td>
      </tr>
      <tr>
      <td width="15%"><h4>Angkatan</h4></td>
      <td><select class="form-control" name="list_angkatan" id="list_angkatan">
		  <option selected style="display:none">-=Pilih Angkatan=-</option>
		  <option value="2010">2010</option>
		  <option value="2011">2011</option>
		  <option value="2012">2012</option>
		  <option value="2013">2013</option>
		  <option value="2014">2014</option>
		  </select></td>
      </tr>
      <tr>
      <td width="15%"><h4>Alamat<br>
        Sekarang</h4>
        </td>
      <td><textarea class="form-control" name="txt_alamat" cols="32" wrap="virtual" id="txt_alamat" placeHolder="Alamat sekarang"><?php echo $data['alamat']; ?></textarea></td>
      </tr>
      <tr>
      <td width="15%"><h4>Nomor HP</h4></td>
      <td><input class="form-control" name="txt_hp" type="text" id="txt_hp" size="13" maxlength="13" value="<?php echo $data['no_hp']; ?>" placeHolder="Nomor HP" /></td>
      </tr>
      <tr>
      <td width="15%"><h4>Divisi</h4></td>
<td><select class="form-control" name="list_divisi" id="list_divisi">
         	  <option selected style="display:none">-=Pilih Divisi=-</option>
  		      <option value="Networking">Networking</option>
  		      <option value="Programming">Programming</option>
  		      <option value="OS">Operating System</option>
            </select></td>
      </tr>
      </table>
      <div class="text-center">
      <input name="chk_accept" type="checkbox" id="chk_accept" value="Accept">Saya yakin bahwa data yang saya masukan adalah benar<br />
      <button name="btn_submit" type="submit" class="btn btn-success" id="btn_submit" value="Daftar"><span class="glyphicon glyphicon-floppy-disk"></span> Update</button>
      <a href="list.php" name="btn_exit" class="btn btn-danger" id="btn_exit"><span class="glyphicon glyphicon-remove"></span> Batal</button></a>
      </div>
  </form>
<?php
if(isset($_POST['btn_submit'])){
	if(isset($_POST['chk_accept'])){
	$nim=$_POST['txt_nim'];
	$nama=$_POST['txt_nama'];
	$prodi=$_POST['list_prodi'];
	$kelas=$_POST['list_kelas'];
	$angkatan=$_POST['list_angkatan'];
	$alamat=$_POST['txt_alamat'];
	$hp=$_POST['txt_hp'];
	$divisi=$_POST['list_divisi'];
		
	$query="UPDATE `register_ice`.`anggota` SET nim='$nim', nama='$nama', prodi='$prodi', kelas='$kelas', angkatan='$angkatan', alamat='$alamat', no_hp='$hp', divisi='$divisi' WHERE nim='$nim'";
	
	mysqli_query($connect,$query) or exit ("<div class='alert alert-danger' role='alert'>Terjadi kesalahan pada data anda. Mohon periksa kembali</div>");
	echo "<div class='alert alert-success' role='alert'>Data berhasil diperbaharui</div>";}
	else {
		echo "<div class='alert alert-danger' role='alert'>Anda belum yakin dengan data yang anda masukan</div>";}
}
?>
</div>
</body>
</html>