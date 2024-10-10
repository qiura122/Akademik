<?php
include 'koneksi.php';

$id = $_GET['KodeReferensi'];
mysqli_query($koneksi, "delete from bukureferensi where KodeReferensi = '$id'");

header("location:bukureferensi.php");
?>