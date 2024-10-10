<?php
include 'koneksi.php';

$nip = $_GET['nip'];

mysqli_query($koneksi, "delete from dosen where nip ='$nip'");

header("location:listdosen.php");

?>