<?php
include('koneksi.php');

$nim    =$_POST['mahasiswa_nim'];
$nama    =$_POST['mahasiswa_nama'];
$prodi    =$_POST['mahasiswa_prodi'];

if($nim=="" ||$nama=="" ||$prodi=="" )
{
  echo"<script>alert('Formulir Belum Lengkap, Mohon isi data dengan lengkap !!!');window.location.href='input_datamhs.php';</script>";
}
else
{

$input="INSERT INTO mahasiswa (nim , nama , prodi ) 
            values('$nim', '$nama', '$prodi')";

$hasil=mysql_query($input);

if($hasil)
{
echo("<script>alert('Data Berhasil Disimpan !!!');window.location.href='view_data.php';</script>");
}
else
{
echo("<script>alert('Data Gagal Disimpan !!!');window.location.href='input_data.php';</script>");
}
}
?>