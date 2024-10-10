<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>INSERT DATA Buku Referensi</h1><br>
    <a href="bukureferensi.php">kembali</a>
    <br>
    <br>
    <h3>TAMBAH DATA</h3>
    <form action="insert.php" method="post">
        <table>

            <tr>
                <td>Judul Referensi</td>
                <td><input type="text" name="JudulReferensi"></td>
            </tr>
            <tr>
                <td>Jenis Referensi</td>
                <td><select name="JenisReferensi">
                        <option value="Jurnal">Jurnal</option>
                        <option value="Proseding">Proseding</option>
                        <option value="Buku Ajar">Buku Ajar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
                <td><input type="number" name="JumlahHalaman"></td>
            </tr>
            <tr>
                <td>Nomor ISBN</td>
                <td><input type="text" name="NoISBN"></td>
            </tr>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>