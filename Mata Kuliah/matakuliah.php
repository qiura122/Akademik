<!DOCTYPE html>
<html>

<head>
    <title>Mata Kuliah</title>
</head>

<body>
    <h2>MATA KULIAH</h2>
    <br>
    <a href="tambahmatkul.php">+ Tambah Mata Kuliah</a>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>KodeMK</th>
            <th>NamaMK</th>
            <th>JumlahSKS</th>
            <th>Semester</th>
            <th>MKInti</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';

        $batas = 5;
        $halaman = @$_GET['halaman'];
        if (empty($halaman)) {
            $posisi = 0;
            $halaman = 1;
        } else {
            $posisi = ($halaman - 1) * $batas;
        }
        $no = ($halaman - 1) * $batas + 1;

        $query2 = mysqli_query($koneksi, "select * from matakuliah");
        $jmldata = mysqli_num_rows(($query2));
        $jmlhalaman = ceil($jmldata / $batas);

        echo "<br> Halaman : ";

        for ($i = 1; $i < $jmlhalaman; $i++)
            if ($i != $halaman) {
                echo " <a href=\"matakuliah_page.php?halaman=$i\">$i</a> | ";
            } else {
                echo "<b>$i</b> | ";
            }

        echo "<p>Total Mata Kuliah : <b>$jmldata</b> orang</p>";
        $query = "select * from matakuliah LIMIT $posisi,$batas";
        $data = mysqli_query($koneksi, $query);
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?> </td>
                <td><?php echo $d['KodeMK']; ?> </td>
                <td><?php echo $d['NamaMK']; ?> </td>
                <td><?php echo $d['JumlahSKS']; ?> </td>
                <td><?php echo $d['Semester']; ?> </td>
                <td><?php echo $d['MKInti'] == 1 ? 'Ya' : 'Tidak'; ?></td>
                <td>
                    <a href="editmatakuliah.php?KodeMK=<?php echo $d['KodeMK']; ?>"> EDIT </a>
                    <a href="hapusmatakuliah.php?KodeMK=<?php echo $d['KodeMK']; ?>"> HAPUS </a>

            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>