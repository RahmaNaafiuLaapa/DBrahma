<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$fakultas = $_POST ['fakultas'];
 if (!empty($nama) || !empty($nim) || !empty($alamat) || !empty($fakultas)) {
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat','$fakultas')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>