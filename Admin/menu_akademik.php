<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        h2 {
            color: #444;
        }

        a {
            color: #06c;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #888;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $username = $_SESSION['username'];
    $status = $_SESSION['status'];
    echo "<h2> Selamat Datang $username, <br> Anda berhasil login!</h2>
        Menu Utama<br><br>
        <a href = 'listmahasiswa.php'>Data Mahasiswa</a><br><br>
        <a href = 'listdosen.php'>Data Dosen</a><br><br>";
    ?>
    <form method="post" action="logout.php">
        <input type="submit" name="tbsubmit" value="LOGOUT">
    </form>
</body>

</html>