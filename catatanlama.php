<?php
session_start();
$user = $_SESSION['username'];
$datauser = "catatan/$user.txt";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
    <title>Catatan</title>
    <style>
        .berdasarkan {
            margin-left: 120px;
            margin-top: 120px;
        }

        .luarandata {
            margin-top: 10px;
            margin-left: 120px;
        }

        #myTable {
            margin-left: 60px;
            margin-top: -160px;
        }

        .urutkan {
            padding: 25px;
        }
    </style>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="gambar/icon.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Annisa Trip</span>
                    <span class="profession">Catatan Perjalanan</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="home.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Halaman Utama</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="isidata.php">
                            <i class='bx bx-edit icon'></i>
                            <span class="text nav-text">Isi Data</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="catatan.php">
                            <i class='bx bx-notepad icon'></i>
                            <span class="text nav-text">Catatan</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">
        <table border="1" align="center" width="50%" class="berdasarkan">
            <tr>
                <td>
                    <center><div class="text">Catatan Perjalanan</div></center>
                </td>
            </tr>
            <td align="center">
                <div class="urutkan">
                    <a>Urutkan Berdasarkan</a>
                    <select id="urut" onclick="urutkan(this)">
                        <option value="0">Tanggal</option>
                        <option value="1">Waktu</option>
                        <option value="2">Lokasi</option>
                        <option value="3">Nama Customer</option>
                    </select>
                </div>

            </td>
        </table>
        <br>
        <table border="1" align="center" width="50%" height="350px" class="luarandata">
            <td>
                <table id="myTable" align="center" border="1" width="80%">
                    <thead>

                        <tr>
                            <th value='1'>Tanggal</th>
                            <th value='2'>Waktu</th>
                            <th value='3'>Lokasi</th>
                            <th  value='4'>Nama Customer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if (!file_exists($datauser)) {
                            echo "<td colspan='4' align='center'> Anda belum mempunyai catatan.  </td>";
                        } else {
                            $file = fopen($datauser, "r");
                            while (($row = fgets($file)) != false) {
                                $col = explode(',', $row);
                                foreach ($col as $data) {
                                    echo "<td align='center'>" . trim($data) . "</td>";
                                }
                            }
                        }
                        ?>

                    </tbody>

                </table>
            </td>
        </table>
        <script src="main.js"></script>
    </section>


</body>

</html>