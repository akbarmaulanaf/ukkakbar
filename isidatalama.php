<?php
    session_start();

    if(isset($_POST['simpan'])){
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $lokasi = $_POST['lokasi'];
        $suhu = $_POST['suhu'];
        $nama = $_SESSION['username'];
        $text = $tanggal . "," . $jam . "," . $lokasi . "," . $suhu . "</tr> \n";
        $data = "catatan/$nama.txt";
        $dirname = dirname($data);
        if(!is_dir($dirname)){
            mkdir($dirname, 0755, true);
        }
        $fp = fopen($data, 'a+');
        if(fwrite($fp,$text)){
            echo '<script>alert("Catatan berhasil disimpan!");</script>';
        }
    }
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
    <title>Isi Data</title>
    <style>
        .keseluruhan{
            margin-left: 120px;
            margin-top: 120px;
        }
        .ngisi{
            margin-left: 60px;
            margin-top: 30px;
        }
        .btn1 {
  border: none;
  outline: none;
  height: 50px;
  width: 40%;
  background-color: #695cfe;
  color: white;
  border-radius: 4px;
  margin-top: 20px;
}
.btn1:hover {
  background: white;
  border: 1px solid;
  color: #695cfe;
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
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Halaman Utama</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="isidata.php">
                            <i class='bx bx-edit icon' ></i>
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
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <table border="1" align="center" height="400px" width="50%" class="keseluruhan">
            <tr>
                <td><div class="text">Silahkan Isi Data</div></td>
            </tr>
            <td>
                <form action="" method="POST">
                    <table align="center" class="ngisi">
                        <tr>
                            <td>Tanggal</td>
                            <td><input type="date" name="tanggal"></td>
                        </tr>
                        <tr>
                            <td>Jam</td>
                            <td><input type="time" name="jam"></td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td><input type="text" name="lokasi"></td>
                        </tr>
                        <tr>
                            <td>Nama Customer</td>
                            <td><input type="text" name="suhu"></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td align="right"><input type="submit" name="simpan" values="Simpan" class="btn1"></td>
                        </tr>
                    </table>

                </form>
            </td>
        </table>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
