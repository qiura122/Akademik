<?php
include 'koneksi.php';

$jdf = $_POST['JudulReferensi'];
$jenisre = $_POST['JenisReferensi'];
$jmlhal = $_POST['JumlahHalaman'];
$noisbn = $_POST['NoISBN'];

mysqli_query($koneksi, "insert into bukureferensi values('','$jdf','$jenisre','$jmlhal','$noisbn')");

header("location:bukureferensi.php");
?>