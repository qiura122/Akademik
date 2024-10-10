<?php
include 'koneksi.php';

$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$alamat = $_POST['Alamat'];

mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim','$alamat')");

header("location:listmahasiswa.php");
?>