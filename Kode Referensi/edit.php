<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="bukureferensi.php">kembali</a><br>

    <?php
    include 'koneksi.php';
    $id = $_GET['KodeReferensi'];
    $data = mysqli_query($koneksi, "select * from bukureferensi where KodeReferensi='$id'");

    while ($d = mysqli_fetch_array($data)) {
        ?>

        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>nma matakuliah</td>
                    <td>
                        <input type="hidden" name="KodeReferensi" value="<?php echo $d['KodeReferensi']; ?>">
                        <input type="text" name="JudulReferensi" value="<?php echo $d['JudulReferensi']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>jenis referensi</td>
                    <td><select name="JenisReferensi">
                            <option value="Jurnal" value="<?php echo $d['JenisReferensi']; ?>">Jurnal</option>
                            <option value="Proseding" value="<?php echo $d['JenisReferensi']; ?>">Proseding</option>
                            <option value="Buku Ajar" value="<?php echo $d['JenisReferensi']; ?>">Buku Ajar</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Jumlah halaman</td>
                    <td><input type="number" name="JumlahHalaman" value="<?php echo $d['JumlahHalaman']; ?>"></td>
                </tr>
                <tr>
                    <td>nomor ISBN</td>
                    <td><input type="text" name="NoISBN" value="<?php echo $d['NoISBN']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>

        </form>
        <?php
    }
    ?>
</body>

</html>