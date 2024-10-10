<?php
include 'koneksi.php';

$kdref = $_POST['KodeReferensi'];
$jdref = $_POST['JudulReferensi'];
$jenisref = $_POST['JenisReferensi'];
$jlmhal = $_POST['JumlahHalaman'];
$noisbn = $_POST['NoISBN'];

mysqli_query($koneksi, "update bukureferensi set JudulReferensi='$jdref',JenisReferensi='$jenisref',JumlahHalaman='$jlmhal',NoISBN='$noisbn' where KodeReferensi='$kdref'");

header("location:bukureferensi.php");
?>