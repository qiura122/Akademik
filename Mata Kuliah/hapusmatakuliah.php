<?php
include 'koneksi.php';

$KodeMK = $_GET['KodeMK'];

mysqli_query($koneksi, "delete from matakuliah where KodeMK='$KodeMK' ");

header("location:matakuliah.php");
?>