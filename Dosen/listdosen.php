<!DOCTYPE html>
<html>

<head>
    <title>CRUD MySQLI</title>
</head>

<body>
    <h2>LIST DATA DOSEN</h2>
    <br />
    <a href="tambahdosen.php"> + Tambah Dosen</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Tahun Diterma</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;

        $batas = 5;
        $halaman = @$_GET['halaman'];
        if (empty($halaman)) {
            $posisi = 0;
            $halaman = 1;
        } else {
            $posisi = ($halaman - 1) * $batas;
        }
        $no = ($halaman - 1) * $batas + 1;

        $query2 = mysqli_query($koneksi, "select * from dosen");
        $jmldata = mysqli_num_rows($query2);
        $jmlhalaman = ceil($jmldata / $batas);

        echo "Halaman : ";

        for ($i = 1; $i < $jmlhalaman; $i++)
            if ($i != $halaman) {
                echo "<a href=\"listdosen_page.php?halaman=$i\">$i</a> | ";
            } else {
                echo " <b>$i</b> | ";
            }

        echo "<p>Total Dosen : <b>$jmldata</b> orang</p>";

        $query = "select * from dosen LIMIT $posisi,$batas";

        $data = mysqli_query($koneksi, $query);
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NIP']; ?></td>
                <td><?php echo $d['NamaDosen']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td><?php echo $d['NoTelp'] ?></td>
                <td><?php echo $d['TahunDiterima']; ?></td>
                <td>
                    <a href="edit.php?nip=<?php echo $d['NIP']; ?>">EDIT</a>
                    <a href="hapus.php?nip=<?php echo $d['NIP']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }

        ?>
    </table>
</body>

</html>