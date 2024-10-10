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
    <h3>Tambah Dosen</h3>
    <form method="post" action="tambah_dosen.php">
        <table>
            <tr>
                <td>NIP</td>
                <td><input type="text" name="NIP"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="NamaDosen"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="NoTelp"></td>
            </tr>
            <tr>
                <td>Tahun Diterima</td>
                <td><input type="number" name="TahunDiterima"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>