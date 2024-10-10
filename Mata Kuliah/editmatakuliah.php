<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <h2>EDIT MATAKULIAH </h2>
    <br>
    <a href="matakuliah.php">KEMBALI</a>
    <br>
    <br>
    <h3>EDIT DATA MATAKULIAH</h3>

    <?php
    include 'koneksi.php';
    $KodeMK=$_GET['KodeMK'];
    $data=mysqli_query($koneksi,"select * from matakuliah where KodeMK='$KodeMK'");
    while($d=mysqli_fetch_array($data)){
        ?>
        <form method="post" action="updatematakuliah.php">
        <input type="hidden" name="KodeMK" value="<?php echo $d['KodeMK'] ?>">
            <table>  
                <tr>
                    <td>NamaMK</td>
                    <td>
                        <input type="text" name="NamaMK" value="<?php echo $d['NamaMK'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>JumlahSKS</td>
                    <td>
                        <input type="number" name="JumlahSKS" value="<?php echo $d['JumlahSKS'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>
                        <input type="number" name="Semester" value="<?php echo $d['Semester'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>MKInti</td>
                    <td>
                        <input type="number" name="MKInti" value="<?php echo $d['MKInti'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="SIMPAN">
                    </td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>
