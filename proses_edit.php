<?php
include('koneksi.php');

$nim    =$_POST['mahasiswa_nim'];
$nama    =$_POST['mahasiswa_nama'];
$prodi    =$_POST['mahasiswa_prodi'];

$ubah="UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE nim=$nim";

$query=mysql_query($ubah);

if($query){
echo("<script>alert('Data Telah Diubah!!');window.location.href='view_data.php';</script>");
}else{
echo("<script>alert('Data Gagal Diubah !!');window.location.href='view_data.php';</script>");
}
?>