<?php
// Memulai sesi
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Jika tombol logout ditekan, hapus semua data sesi dan redirect ke halaman login
if (isset($_POST['logout'])) {
    session_destroy(); // Hapus semua data sesi
    header("Location: login.php"); // Redirect ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4c2c2;
            /* Light pink background */
            margin: 0;
            padding: 20px;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: fadeIn 1s ease-out;
        }

        h2 {
            color: #d147a3;
            /* Pink color for headings */
            text-align: center;
            animation: fadeIn 2s ease-out;
        }

        table {
            width: 90%;
            max-width: 800px;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 3s ease-out;
        }

        table,
        th,
        td {
            border: 1px solid #ffb6c1;
            /* Light pink border */
        }

        th,
        td {
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #ff69b4;
            /* Hot pink background for table headers */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #ffe4e1;
            /* Misty rose background for even rows */
        }

        a {
            color: #ff1493;
            /* Deep pink links */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            color: #ff69b4;
            /* Hot pink on hover */
        }

        @media (max-width: 600px) {

            table,
            th,
            td {
                font-size: 14px;
            }

            body {
                padding: 10px;
            }

            table {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <h2>Selamat Tinggal,<?php echo $_SESSION['username']; ?></h2>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>