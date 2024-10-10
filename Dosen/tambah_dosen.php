<?php
include 'koneksi.php';

$nip = $_POST['NIP'];
$nama = $_POST['NamaDosen'];
$alamat = $_POST['Alamat'];
$notelp = $_POST['NoTelp'];
$thnterima = $_POST['TahunDiterima'];

mysqli_query($koneksi, "insert into dosen values('$nip', '$nama', '$alamat', '$notelp', '$thnterima')");

header("location:listdosen.php");

?>