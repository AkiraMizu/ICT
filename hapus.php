<?php
include("koneksi.php");
$delete="DELETE from anggota where nim='$_GET[nim]'";
mysqli_query($connect,$delete);
echo("Data berhasil dihapus") ;
header ('location:list.php') ;
?>