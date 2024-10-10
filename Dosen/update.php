<?php
include 'koneksi.php';

$nip = $_POST['NIP'];
$nama = $_POST['NamaDosen'];
$alamat = $_POST['Alamat'];
$notelp = $_POST['NoTelp'];
$thnterima = $_POST['TahunDiterima'];

mysqli_query($koneksi, "update dosen set NamaDosen ='$nama', Alamat ='$alamat', NoTelp ='$notelp', TahunDiterima ='$thnterima' where NIP ='$nip'");

header("location:listdosen.php");

?>