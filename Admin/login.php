<!DOCTYPE html>
<html>

<head>
    <title>Membuat Login Dengan PHP dan MySQLi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        table {
            margin: auto;
            background-color: #ffffff;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        td,
        input[type="text"],
        input[type="password"] {
            padding: 8px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 10px 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="text"],
        input[type="password"] {
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            /* Tambahkan ini untuk mengatur teks ke tengah */
        }

        h2 {
            color: #333;
            /* Warna teks untuk heading */
        }

        table {
            margin: auto;
            background-color: #ffffff;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            /* Sudah ada, memberikan efek rounded */
            overflow: hidden;
            width: 25%;
            /* Mengatur lebar table */
        }

        td,
        input[type="text"],
        input[type="password"] {
            padding: 8px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            /* Warna background tombol */
            color: white;
            border: none;
            border-radius: 4px;
            /* Rounded corners untuk tombol */
            cursor: pointer;
            padding: 10px 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            /* Warna saat hover */
        }

        input[type="text"],
        input[type="password"] {
            border: 1px solid #ccc;
            border-radius: 4px;
            /* Rounded corners untuk input fields */
        }
    </style>
    </style>
</head>

<body>
    <h2>Login</h2>
    <br />
    <!-- cek pesan notifikasi -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! username atau password salah!";
        } elseif ($_GET['pesan'] == "login") {
            echo "Anda telah berhasil login";
            header("location: menu_akademik.php");
            exit();
        } elseif ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <br />
    <br />
    <form method="post" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukan Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukan Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="Submit" value="LOGIN"></td>
            </tr>
        </table>
</body>

</html>