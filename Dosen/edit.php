<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLI</title>
</head>

<body>
    <h2>CRUD DATA DOSEN</h2>
    <br />
    <a href="listdosen.php">Kembali</a>
    <br />
    <br />
    <h3>EDIT DATA DOSEN</h3>

    <?php
    include 'koneksi.php';
    $nip = $_GET['nip'];
    $data = mysqli_query($koneksi, "select * from dosen where nip = '$nip'");
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="NIP" value="<?php echo $d['NIP'] ?>">
                        <input type="text" name="NamaDosen" value="<?php echo $d['NamaDosen']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NoTelp</td>
                    <td>
                        <input type="text" name="NoTelp" value="<?php echo $d['NoTelp']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tahun Diterima</td>
                    <td>
                        <input type="number" name="TahunDiterima" value="<?php echo $d['TahunDiterima']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>

</body>

</html>