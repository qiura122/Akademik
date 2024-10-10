<html>

<head>
</head>

<body>
    <h3>TAMBAH DATA MATA KULIAH</h3>
    <form action="tambah_matkul.php" method="post">
        <table>
            <tr>
                <td>KodeMK</td>
                <td><input type="text" name="KodeMK"></td>
            </tr>
            <tr>
                <td>NamaMK</td>
                <td><input type="text" name="NamaMK"></td>
            </tr>
            <tr>
                <td>JumlahSKS</td>
                <td><input type="number" name="JumlahSKS"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="number" name="Semester"></td>
            </tr>
            <tr>
                <td>MKInti</td>
                <td><input type="radio" name="MKInti" value="1"> Iya
                    <input type="radio" name="MKInti" value="0"> Tidak
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>

        </table>
    </form>
</body>

</html>