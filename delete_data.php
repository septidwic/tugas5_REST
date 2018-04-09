<?php
include('koneksi.php');

$nim = $_GET['nim'];    
$query=mysql_query("delete from mahasiswa where nim='$nim'") or die (mysql_error());

if($query){
echo("<script>alert('Data berhasil Dihapus !!');window.location.href='view_data.php';</script>");
}else{
echo("<script>alert('Data Gagal Dihapus !!');window.location.href='view_data.php';</script>");
}
?>>