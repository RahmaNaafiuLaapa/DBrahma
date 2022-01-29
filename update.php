<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$fakultas = $_POST['fakultas'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat', fakultas='$fakultas' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>